<?php
namespace App\Http\Controllers;
use App\Http\Repositories\PdfRepo;
use Illuminate\Routing\Controller as BaseController;
class PdfController extends BaseController{
	public function index(){
		$this->pdfRepo = new PdfRepo;
		return $this->pdfRepo->demo();
	}
}
