
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Tulis Pesan";

		
		$this->form_validation->set_rules('to', 'Nomot Tujuan', 'required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');
		if ($this->form_validation->run() == false) {
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('sms/index',$data);
		$this->load->view('templates/footer_user');
		}else{
			$mobile = $this->input->post('to');
      		$message = $this->input->post('pesan');
      $data = $this->input->post();
      unset($data['submit']);
      $msgencode = urlencode($message);
      $userkey = "si3vkyk73sfcyqzraz";
      $passkey = "6urd6qoozn";
      $router = "";

      $postdata = array('authkey'=>$userkey,
                'mobile'=>$mobile,
                'message'=>$msgencode,
                'router'=>$router
                );
      $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$mobile&pesan=$msgencode";

      $ch  = curl_init();
          curl_setopt_array($ch,array(
                      CURLOPT_URL => $url,
                      CURLOPT_RETURNTRANSFER => TRUE,
                      CURLOPT_POST => TRUE,
                      CURLOPT_POSTFIELDS => $postdata
            ));

      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

      $output = curl_exec($ch);
      if (curl_errno($ch)) {
        echo "error". curl_error($ch);
      }
      curl_close($ch);
       
      ?>
        <br>respon ID Mobile : <?php echo $output; ?> pesan sukses di kirim</br>
      <?php
      $this->session->set_flashdata('message','Pesan di Kirim');
					redirect('sms');

			}

		}

	public function credit()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Credit";

		
		$this->form_validation->set_rules('to', 'Nomot Tujuan', 'required');
		if ($this->form_validation->run() == false) {
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('sms/credit',$data);
		$this->load->view('templates/footer_user');
		}else{
			$mobile = $this->input->post('to');
      $data = $this->input->post();
      unset($data['submit']);
      $userkey = "8b05e2";
      $passkey = "f62cq0g739";
      $router = "";

      $postdata = array('authkey'=>$userkey,
                'mobile'=>$mobile,
                'router'=>$router
                );
      $url = "https://reguler.zenziva.net/apps/smsapibalance.php?userkey=$userkey&passkey=$passkey";

      $ch  = curl_init();
          curl_setopt_array($ch,array(
                      CURLOPT_URL => $url,
                      CURLOPT_RETURNTRANSFER => TRUE,
                      CURLOPT_POST => TRUE,
                      CURLOPT_POSTFIELDS => $postdata
            ));

      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

      $output = curl_exec($ch);
      if (curl_errno($ch)) {
        echo "error". curl_error($ch);
      }
      curl_close($ch);
       
      ?>
        <br>respon ID Mobile : <?php echo $output; ?> pesan sukses di kirim</br>
      <?php
      $this->session->set_flashdata('message','Pesan di Kirim');
					redirect('sms');

			}
	}

	

	public function inbox()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Kotak Masuk";
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('sms/inbox',$data);
		$this->load->view('templates/footer_user');

// 		$url = "https://reguler.zenziva.net/api/inboxgetall.php?userkey=$userkey&passkey=$passkey&status=unread";

	}

	public function outbox()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Kotak Keluar";
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('sms/outbox',$data);
		$this->load->view('templates/footer_user');
	}

	public function send()
	{
		$data['user'] = $this->db->get_where('users',['email'=>$this->session->userdata('email')])->row_array();
		// echo "Selamat datang ",$data['user']['name'];
		$data['title'] = "Pesan Terkirim";
		$this->load->view('templates/header_user',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('sms/send',$data);
		$this->load->view('templates/footer_user');
	}
}

