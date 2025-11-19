<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class ReportsController extends Controller
{
    protected $admin_name;
    protected $admin_role;

    public function __construct() {
        parent::__construct();
        $this->call->model('Users_model');

        // Fetch admin info from session for header
        $admin_id = $this->session->userdata('user_id');
        if ($admin_id) {
            $admin = $this->Users_model->getUserById($admin_id);
            $this->admin_name = $admin['fullname'] ?? 'Admin';
            $this->admin_role = $admin['role'] ?? 'Admin';
        } else {
            $this->admin_name = 'Admin';
            $this->admin_role = 'Admin';
        }
    }

    public function reports()
    {
        $data['today'] = $this->Users_model->getTodaySales();
        $data['monthly'] = $this->Users_model->getMonthlySales();
        $data['yearly'] = $this->Users_model->getYearlySales();
        $data['weekly'] = $this->Users_model->getWeeklySales();
        $data['overall_sales'] = $this->Users_model->getOverallSales();
        $data['purchase_items'] = $this->Users_model->getSales();

        // Add admin info for header
        $data['admin_name'] = $this->admin_name;
        $data['admin_role'] = $this->admin_role;

        $this->call->view('admin/reports', $data);
    }

    public function downloadReportsPdf()
    {
        $today = $this->io->post('today');
        $weekly = $this->io->post('weekly');
        $monthly = $this->io->post('monthly');
        $overall_sales = $this->io->post('overall_sales');

        $pdf = new TCPDF();
        $pdf->SetCreator('Jandel');
        $pdf->SetAuthor('Escalera');
        $pdf->SetTitle('Sales Reports');
        $pdf->SetSubject('Sales Reports');
        $pdf->SetKeywords('Sales, Reports');
        $pdf->AddPage();
        $pdf->SetFont('times', '', 12);

        $content = '
            <h1>Sales Report</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>Today</th>
                        <th>Weekly</th>
                        <th>Monthly</th>
                        <th>Overall Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' . 'Php' . number_format($today, 2) . '</td>
                        <td>' . 'Php' . number_format($weekly, 2) . '</td>
                        <td>' . 'Php' . number_format($monthly, 2) . '</td>
                        <td>' . 'Php' . number_format($overall_sales, 2) . '</td>
                    </tr>
                </tbody>
            </table>
        ';

        $pdf->writeHTML($content, true, false, true, false, '');
        $pdf->Output('sales_reports.pdf', 'D');

        return redirect('reports');
    }
}
?>
