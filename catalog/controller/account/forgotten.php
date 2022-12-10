<?php
class ControllerAccountForgotten extends Controller {
	private $error = array();

	public function index() {
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$this->load->language('account/forgotten');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('account/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_account_customer->editCode($this->request->post['email'], token(40));

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_forgotten'),
			'href' => $this->url->link('account/forgotten', '', true)
		);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->link('account/forgotten', '', true);

		$data['back'] = $this->url->link('account/login', '', true);

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} else {
			$data['email'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/forgotten', $data));
	}

	protected function validate() {
		if (!isset($this->request->post['email'])) {
			$this->error['warning'] = $this->language->get('error_email');
		} elseif (!$this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
			$this->error['warning'] = $this->language->get('error_email');
		}
		
		// Check if customer has been approved.
		$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

		if ($customer_info && !$customer_info['status']) {
			$this->error['warning'] = $this->language->get('error_approved');
		}

		return !$this->error;
	}

	public function Check_valid_Email(){
		
		$this->load->model('account/customer');
		$this->load->language('account/forgotten');
		$reset_id=$this->request->post['reset_email_mobile'];	
		$email_valid=$this->model_account_customer->check_customer_email_valid($reset_id);
		if(!empty($email_valid))
		{
			$iOtp=rand(1000,9999);
			$subject="Forget Password-VMmobile";
			$message="Password Reset One Time Password is ".$iOtp;
			
			// $email_to = "ramkibui2k22@gmail.com";
			$email_to=$reset_id;
			$customer_valid=$this->model_account_customer->check_customer_valid($reset_id);

			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($email_to);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender($this->config->get('config_mail_smtp_username'));
			$mail->setSubject($subject);
			$mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
			$mail->send();

			$otp_login=$this->model_account_customer->email_password_otp_update($iOtp,$reset_id);

			$this->response->addHeader('Content-Type: application/json');
			$json['status']= 'success';
			$this->response->setOutput(json_encode($json));
		}
		else
		{
			$this->response->addHeader('Content-Type: application/json');
			$json['status']= 'failed';
			$this->response->setOutput(json_encode($json));
		}
		
	}

	public function Check_valid_mobile(){
		$reset_id=$this->request->post['reset_email_mobile'];	
		$this->load->model('account/customer');
		$customer_valid=$this->model_account_customer->check_customer_valid($reset_id);

		if(!empty($customer_valid))
		{
			$username=TEXT_LOCAL_USER;
			$password=TEXT_LOCAL_PASS;
			$iOtp=rand(1000,9999);


			$sender = "CICSTO"; // This is who the message appears to be from.
			// $numbers = "9578877625"; // A single number or a comma-seperated list of numbers
			$numbers=$reset_id;
			$message=$iOtp." is your OTP to register with CoolinCool Store, For any help, please contact us at +91 9655007712";

			// 612 chars or less
			// A single number or a comma-seperated list of numbers
			$message = urlencode($message);
			$post_data = "username=".$username."&hash=".$password."&message=".$message."&sender=".$sender."&numbers=".$numbers;
			$ch = curl_init('https://api.textlocal.in/send/?');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch); // This is the result from the API
			curl_close($ch);

			$otp_login=$this->model_account_customer->otp_update_forget($iOtp,$reset_id);
			

			$this->response->addHeader('Content-Type: application/json');
			$json['status']= 'success';
			$this->response->setOutput(json_encode($json));
		}
		else
		{
			$this->response->addHeader('Content-Type: application/json');
			$json['status']= 'failed';
			$this->response->setOutput(json_encode($json));
		}
		
	}
	// public function otp_verification_forget(){
	// 	print_r('1');exit;
	// }

	public function otp_verification_forget(){
		$email=$_POST['reset_email_mobile'];
		$password=$_POST['iOtp'];
		$this->load->model('account/customer');
		$login_check=$this->model_account_customer->custom_forget_check($email,$password);
		if($login_check==true){
			$json['login_status']= 'success';
			$this->response->setOutput(json_encode($json));
		}
		else
		{
			$json['login_status']= 'failed';
			$this->response->setOutput(json_encode($json));
		}
	}

	public function otp_verification_email(){
		$email=$_POST['reset_email_mobile'];
		$password=$_POST['iOtp'];
		$this->load->model('account/customer');
		$login_check=$this->model_account_customer->custom_forget_check_email($email,$password);
		if($login_check==true){
			$json['login_status']= 'success';
			$this->response->setOutput(json_encode($json));
		}
		else
		{
			$json['login_status']= 'failed';
			$this->response->setOutput(json_encode($json));
		}
	}

	public function update_custome_password(){
		$reset_id=$this->request->post['reset_email_mobile'];	
		$new_password=$this->request->post['new_password'];	
		$confirm_password=$this->request->post['confirm_password'];	
		if($new_password==$confirm_password){
			$this->load->model('account/customer');
            $customer_info=$this->model_account_customer->update_customer_password($reset_id,$confirm_password);
            
			$json['login_status']= 'success';
			$this->response->setOutput(json_encode($json));
		}
		else
		{
			$json['login_status']= 'failed';
			$this->response->setOutput(json_encode($json));
		}

	}
	public function update_email_custome_password(){
		$reset_id=$this->request->post['reset_email_mobile'];	
		$new_password=$this->request->post['new_password'];	
		$confirm_password=$this->request->post['confirm_password'];	
	
		if($new_password==$confirm_password){
			$this->load->model('account/customer');
            $customer_info=$this->model_account_customer->update_customer_email_password($reset_id,$confirm_password);
            
			$json['login_status']= 'success';
			$this->response->setOutput(json_encode($json));
		}
		else
		{
			$json['login_status']= 'failed';
			$this->response->setOutput(json_encode($json));
		}

	}

}
