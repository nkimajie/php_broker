<?php
namespace App\Controllers;

use App\Models\RequestModel;

class Home extends BaseController
{
	public function __construct()
	{
		helper(['form', 'url', 'date']);
	}

	public function index(){
		$data['title'] = 'Home | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/home', $data);
	}

	#terms
	public function terms(){
		$data['title'] = 'terms and condition | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/terms', $data);
	}

	#contact
	public function contact(){
		$data['title'] = 'Contact | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/contact', $data);
	}

	#faq
	public function faq(){
		$data['title'] = 'Faq | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/faq', $data);
	}

	#about
	public function about(){
		$data['title'] = 'About | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/about', $data);
	}

	#affiliates
	public function affiliates(){
		$data['title'] = 'Affiliates | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/affiliates', $data);
	}

	#register
	public function register(){
		$data['title'] = 'Register | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/register', $data);
	}

	#login
	public function login(){
		$data['title'] = 'Login | Bitsplash - Bitcoin Crypto Currency Investment Website';
		echo view('landing/login', $data);
	}
}
