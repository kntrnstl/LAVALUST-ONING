<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class MainController extends Controller
{

    public function __construct() {
        parent::__construct();
        $this->call->model('Users_model');
    }

    public function index()
    {
        // if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
        //     redirect('login');
        // }

        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('homepage', $data);
    }

    public function main()
    {
        // if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
        //     redirect('login');
        // }

        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('mainpage', $data);
    }

    public function checkout()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $data['users'] = $this->Users_model->getUserById($userId);

        $this->call->view('checkout', $data);
    }

    public function purchase()
    {
        // Check if the user is logged in
        if (!$this->session->userdata('IsLoggedIn')) {
            redirect('login');
        }

        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        // Safely get form inputs
        $fullname = isset($_POST['fullname']) ? $this->io->post('fullname') : '';
        $email = isset($_POST['email']) ? $this->io->post('email') : '';
        $number = isset($_POST['number']) ? $this->io->post('number') : '';
        $compAdd = isset($_POST['compAdd']) ? $this->io->post('compAdd') : '';
        $payment = isset($_POST['payment']) ? $this->io->post('payment') : '';
        $discountCode = isset($_POST['discount_code']) ? $this->io->post('discount_code') : '';
        $discounted_total = isset($_POST['discounted_total']) ? $this->io->post('discounted_total') : 0;

        // Save purchase details including discount
        $purchaseData = [
            'user_id' => $userId,
            'fullname' => $fullname,
            'email' => $email,
            'number' => $number,
            'payment' => $payment,
            'compAdd' => $compAdd,
            'discount_code' => $discountCode,
            'discounted_total' => $discounted_total
        ];

        $purchaseId = $this->Users_model->insertPurchaseData($purchaseData);

        // Retrieve cart data
        $cartItems = $this->Users_model->getcart($userId);

        if (!empty($cartItems)) {
            // Calculate total cart price
            $cartTotal = array_sum(array_map(fn($c) => $c['prize'] * $c['quantity'], $cartItems));

            foreach ($cartItems as $cartItem) {
                $itemTotal = $cartItem['prize'] * $cartItem['quantity'];

                // Apply discount proportionally if provided
                if ($discounted_total > 0 && $cartTotal > 0) {
                    $itemTotal = ($itemTotal / $cartTotal) * $discounted_total;
                }

                $itemData = [
                    'Customer' => $fullname,
                    'CustomerId' => $userId,
                    'purchase_id' => $purchaseId,
                    'prod_id' => $cartItem['prod_id'],
                    'Item_name' => $cartItem['name'],
                    'Item_image' => $cartItem['image'],
                    'quantity' => $cartItem['quantity'],
                    'prize' => $cartItem['prize'],
                    'total_price' => $itemTotal,
                ];

                $this->db->table('purchase_items')->insert($itemData);
            }

            // Update product quantities
            $this->Users_model->updateProductQuantity($purchaseId);

            // Clear cart
            $this->Users_model->clearCart($userId);

            $_SESSION['thankyou_total'] = $discounted_total > 0 ? $discounted_total : array_sum(array_map(fn($c) => $c['prize'] * $c['quantity'], $cartItems));
            $_SESSION['thankyou_payment'] = $payment;

        }

        redirect('thankyou');
    }


    public function thankyou()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        $this->call->view('thankyou');
    }

    public function contact()
    {
        // if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
        //     redirect('login');
        // }
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('contact', $data);
    }
    public function detail()
    {
        // if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
        //     redirect('login');
        // }
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('detail', $data);
    }
    public function view($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        $data['prod'] = $this->Users_model->getInfoById($id);
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('viewdetails', $data);
    }
    public function shop()
    {
        // if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
        //     redirect('login');
        // }
        $data['prod'] = $this->Users_model->getInfo();
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('shop', $data);
    }
    
    public function menu()
    {
        // if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
        //     redirect('login');
        // }
        $data['prod'] = $this->Users_model->getInfo();
        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('menu', $data);
    }
    


    public function search()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $searchTerm = $this->io->get('search'); // Get the search term from the query string
        $data['prod'] = $this->Users_model->searchInfo($searchTerm);

        $userId = $this->session->userdata('user_id');
        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);

        $this->call->view('shop', $data);
    }


    public function cart()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        $this->call->view('cart', $data);
    }

    public function Ac($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['prod'] = $this->Users_model->getInfoById($id);
        $quantity = $this->io->post('quantity');

        $bind = [
            'user_id' => $userId,
            'prod_id' => $id, // Add the prod_id to the cart item
            'name' => $data['prod']['name'],
            'image' => $data['prod']['image'],
            'prize' => $data['prod']['prize'],
            'quantity' => $quantity,
        ];

        $this->db->table('cart')->insert($bind);
        redirect('shop');
    }

    public function Acc($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        $userId = $this->session->userdata('user_id');

        $data['prod'] = $this->Users_model->getInfoById($id);
        $bind = [
            'user_id' => $userId,
            'prod_id' => $id, // Add the prod_id to the cart item
            'name' => $data['prod']['name'],
            'image' => $data['prod']['image'],
            'prize' => $data['prod']['prize'],
            'quantity' => 1,
        ];

        $this->db->table('cart')->insert($bind);
        redirect('shop');
    }

    public function cartdel($id)
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }

        if (isset($id)) {
            $this->db->table('cart')->where("id", $id)->delete();
            redirect('cart');
        } else {
            $_SESSION['delete'] = "FAILED";
            redirect('modify');
        }
    }

    public function profile()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        
        $userId = $this->session->userdata('user_id');
        $data['cart'] = $this->Users_model->getcart($userId);
        $data['cartItemCount'] = count($data['cart']);
        
        $data['purchase_items'] = $this->Users_model->getorder($userId);
        $data['users'] = $this->Users_model->getUserById($userId);
        $this->call->view('profile',$data);
    }
    
    public function profUp()
    {
        if (!$this->session->userdata('role') || $this->session->userdata('role') !== 'user') {
            redirect('login');
        }
        $userId = $this->session->userdata('user_id');
        $data['users'] = $this->Users_model->getUserById($userId);
            $fullname = $this->io->post('fullname');
            $number = $this->io->post('number');
            $compAdd = $this->io->post('compAdd');
            $data = [
                "fullname" => $fullname,
                "number" => $number,
                "compAdd" => $compAdd,        
            ];
            // Update the product data in the database
            $this->db->table('users')->where("id", $userId)->update($data);
            redirect('profile');
    }
}
?>