<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class mail extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->helper('notif');
    }

    public function send()
    {
        if ($this->io->method() == 'post') {

            // Get form inputs
            $fullname = $this->io->post('fullname');
            $email    = $this->io->post('email');
            $subject  = $this->io->post('subject');
            $message  = $this->io->post('message');

            // Build message body
            $body = "
                <h3>New Contact Message</h3>
                <p><strong>Name:</strong> $fullname</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong></p>
                <p>$message</p>
            ";

            // Send the email to *your* inbox
            $recipient = "andreicaretas@gmail.com";

            if (sendMail($recipient, $subject, $body)) {
                $data['success'] = "Message sent successfully!";
            } else {
                $data['error'] = "Failed to send message.";
            }

           redirect('contact');
        }
    }
}
