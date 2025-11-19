<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class AdminController extends Controller
{
    protected $admin_name;
    protected $admin_role;

    public function __construct() {
        parent::__construct();
        $this->call->model('Users_model');

        // Get logged-in admin info
        $admin_id = $this->session->userdata('user_id');
        $admin = $this->Users_model->getUserById($admin_id);

        $this->admin_name = $admin['fullname'] ?? 'Admin';
        $this->admin_role = $admin['role'] ?? 'Admin';
    }

    private function adminView($view, $data = []) {
        // Merge admin info with other data
        $data['admin_name'] = $this->admin_name;
        $data['admin_role'] = $this->admin_role;
        $this->call->view($view, $data);
    }

    private function checkAdmin() {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
    }

    // Dashboard
    public function dashboard()
    {
        $this->checkAdmin();

        $data = [
            'today' => $this->Users_model->getTodaySales(),
            'monthly' => $this->Users_model->getMonthlySales(),
            'purchase_items' => $this->Users_model->getSales(),
            'Topitems' => $this->Users_model->topProduct(),
            'overall_sales' => $this->Users_model->getOverallSales()
        ];

        $this->adminView('admin/dashboard', $data);
    }

    // Products page
    public function products()
    {
        $this->checkAdmin();

        $data['prod'] = $this->Users_model->getInfoo();
        $this->adminView('admin/products', $data);
    }

    // Items page
    public function items()
    {
        $this->checkAdmin();

        $data['cat'] = $this->Users_model->getCat();
        $data['size'] = $this->db->table('prosize')->get_all() ?: [];
        $this->adminView('admin/items', $data);
    }

    // Add product
    public function add()
    {
        $this->checkAdmin();

        $name = $this->io->post('name');
        $description = $this->io->post('description');
        $category = $this->io->post('category');
        $quantity = $this->io->post('quantity');
        $prize = $this->io->post('prize');

        $uploadDir = 'uploads/';
        $uploadedFile = $_FILES['image']['tmp_name'];
        $imageFileName = uniqid('img_') . '_' . $_FILES['image']['name'];
        move_uploaded_file($uploadedFile, $uploadDir . $imageFileName);

        $bind = [
            "name" => $name,
            "description" => $description,
            "category" => $category,
            "quantity" => $quantity,
            "prize" => $prize,
            "image" => $imageFileName
        ];

        $this->db->table('prod')->insert($bind);
        redirect('items');
    }

    // Categories
    public function addcat()
    {
        $this->checkAdmin();

        $newcat = $this->io->post('newcat');
        $this->db->table('cat')->insert(['categories' => $newcat]);
        redirect('items');
    }

    public function delcat($id)
    {
        $this->checkAdmin();

        if ($id) {
            $this->db->table('cat')->where("id", $id)->delete();
        }
        redirect('items');
    }

    // Sizes
    public function addsize()
    {
        $this->checkAdmin();
        if (!empty($_POST['newsize'])) {
            $this->db->table('prosize')->insert(['size' => $_POST['newsize']]);
        }
        redirect('items');
    }

    public function delsize($id)
    {
        $this->checkAdmin();
        if ($id) {
            $this->db->table('prosize')->where("id", $id)->delete();
        }
        redirect('items');
    }

    // Modify product
    public function modify()
    {
        $this->checkAdmin();

        $data['prod'] = $this->Users_model->getInfoo();
        $data['cat'] = $this->Users_model->getCat();
        $this->adminView('admin/modify', $data);
    }

    public function edit($id)
    {
        $this->checkAdmin();

        $data['prod'] = $this->Users_model->getInfoo();
        $data['cat'] = $this->Users_model->getCat();
        $data['edit'] = $this->Users_model->searchInfoo($id);
        $this->adminView('admin/modify', $data);
    }

    public function submitedit($id)
    {
        $this->checkAdmin();

        $name = $this->io->post('name');
        $description = $this->io->post('description');
        $category = $this->io->post('category');
        $quantity = $this->io->post('quantity');
        $prize = $this->io->post('prize');

        $data = compact('name', 'description', 'category', 'quantity', 'prize');

        if ($_FILES['image']['size'] > 0) {
            $uploadDir = 'uploads/';
            $uploadedFile = $_FILES['image']['tmp_name'];
            $imageFileName = uniqid('img_') . '_' . $_FILES['image']['name'];
            move_uploaded_file($uploadedFile, $uploadDir . $imageFileName);
            $data['image'] = $imageFileName;
        }

        $this->db->table('prod')->where("id", $id)->update($data);
        redirect('modify');
    }

    // Tracking
    public function trackModify()
    {
        $this->checkAdmin();

        $data['purchase_items'] = $this->Users_model->getSales();
        $data['categories'] = $this->Users_model->getCategories();
        $this->adminView('admin/tracking', $data);
    }

    public function trackEdit($id)
    {
        $this->checkAdmin();

        $data['purchase_items'] = $this->Users_model->getSales();
        $data['categories'] = $this->Users_model->getCategories();
        $data['trackEdit'] = $this->Users_model->getPurchaseItemById($id);
        $this->adminView('admin/tracking', $data);
    }

    public function trackSubmitEdit($id)
    {
        $this->checkAdmin();

        $data = [
            "Item_name" => $this->io->post('item_name'),
            "CustomerId" => $this->io->post('customer_id'),
            "Customer" => $this->io->post('customer'),
            "quantity" => $this->io->post('quantity'),
            "prize" => $this->io->post('prize'),
            "total_price" => $this->io->post('quantity') * $this->io->post('prize'),
            "status" => $this->io->post('status')
        ];

        $this->db->table('purchase_items')->where("id", $id)->update($data);
        redirect('tracking');
    }

    // Users management
    public function users()
    {
        $this->checkAdmin();

        $users = $this->Users_model->getUsers();
        $data['users'] = $users;
        $this->adminView('admin/users_list', $data);
    }

    public function addUser() {
        $this->checkAdmin();

        $data = [
            'email' => $this->io->post('email'),
            'password' => password_hash($this->io->post('password'), PASSWORD_DEFAULT),
            'fullname' => $this->io->post('fullname'),
            'compAdd' => $this->io->post('compAdd'),
            'number' => $this->io->post('number'),
            'role' => $this->io->post('role')
        ];

        $this->Users_model->addUser($data);
        redirect('/admin/users');
    }

    public function editUser($id) {
        $this->checkAdmin();

        $data['user'] = $this->Users_model->getUserById($id);
        $this->adminView('admin/users_edit', $data);
    }

    public function updateUser($id) {
        $this->checkAdmin();

        $data = [
            'email' => $this->io->post('email'),
            'fullname' => $this->io->post('fullname'),
            'compAdd' => $this->io->post('compAdd'),
            'number' => $this->io->post('number'),
            'role' => $this->io->post('role')
        ];

        if (!empty($this->io->post('password'))) {
            $data['password'] = password_hash($this->io->post('password'), PASSWORD_DEFAULT);
        }

        $this->db->table('users')->where('id', $id)->update($data);
        redirect('/admin/users');
    }

    public function deleteUser($id) {
        $this->checkAdmin();
        $this->db->table('users')->where('id', $id)->delete();
        redirect('/admin/users');
    }
}
?>
