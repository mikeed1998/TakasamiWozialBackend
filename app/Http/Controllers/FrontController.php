<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\ProductosPhoto;
use App\Elemento;
use App\Carrusel;
use App\Politica;
use App\Vacante;
use App\Faq;
use App\Categoria;
use App\Configuracion;
use App\Producto;
use App\categoria_detalle;
use App\contenido;
use App\CategoriasProyectos;
use App\CategoriasProyectosDetalles;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
		public function index(){
			
			$elementos = Elemento::where('seccion',1)->get();
			$productos = Producto::where('inicio',1)->where('activo',1)->get();
			$slider = contenido::where('parent',1)->get();
			$carrusel = contenido::where('parent',2)->get();
			$data = Configuracion::first();
			
			foreach($productos as $item){
				$item->foto = ProductosPhoto::where('producto',$item->id)->get()->first()->image;
			}
			return view('front.index',compact('elementos','productos','carrusel', 'slider', 'data'));
	}
	
		public function aboutus(){
			$elementos = Elemento::where('seccion',5)->get();
			$carrusel = contenido::where('parent',2)->get();
			$data = Configuracion::first();

			return view('front.aboutus',compact('elementos','carrusel', 'data'));
		// return view('front.aboutus');
	}

	public function header(){
		$data = Configuracion::first();

		return view('layouts.partials.header', compact('data'));
	}

	public function footer() {
		$data = Configuracion::first();

		return view('layouts.partials.footer', compact('data'));
	}
	
	public function social(){
		$data = Configuracion::first();

		return view('front.social', compact('data'));		
	}

	public function proyectos() {
		$data = Configuracion::first();
		$proyectos = CategoriasProyectos::all();
		$proyectos_d = CategoriasProyectosDetalles::all();

		return view('front.proyectos', compact('data', 'proyectos', 'proyectos_d'));
	}

	public function tests() {
		return view('front.tests');
	}

	public function contacto(){
			$elementos = Elemento::where('seccion',6)->get();
			$data = Configuracion::first();
			return view('front.contacto',compact('elementos','data'));
	}

	public function soluciones() {
		$elementos = Elemento::where('seccion', 2)->get();
		$data = Configuracion::first();

		return view('front.soluciones', compact('elementos', 'data'));
	}

	/*
	public function soluciones($id_subcat){
		$elementos = Elemento::where('seccion',3)->get();
		$relcat = categoria_detalle::find($id_subcat);
		$idprod = Categoria::where('id',$relcat->id_categoria)->get()->first()->parent;
		$product = Producto::find($idprod);

		return view('front.soluciones',compact('elementos','product','relcat'));
			// return view('front.aboutus');

	}
	*/

	public function servicios(){
		$elementos = Elemento::where('seccion',2)->get();
		$productos = Producto::where('inicio',1)->where('activo',1)->get();
		
			foreach($productos as $item){
				$item->foto = ProductosPhoto::where('producto',$item->id)->get()->first()->image;
			}
			
			$todos = Producto::where('activo',1)->get();

			
			foreach($todos as $t){
				
				$categoria = Categoria::where('parent',$t->id)->get()->first();
				if(!empty($categoria)){
					$t->categoria = $categoria->id;
				}
			}

			$todasCat = categoria_detalle::all();

			//dd($todasCat );




		

			return view('front.servicios',compact('elementos','productos','todos','todasCat'));
	}

	public function getServicio(Request $request){
		$producto = Producto::find($request->service);
		return response()->json($producto,200);
	}

	public function details(Producto $product){
		// $product = Producto::find($producto);

		$product->categoria = Categoria::find($product->categoria);

		$product->gallery = $product->fotos()->orderBy('orden', 'asc')->get();

		// $variantes = ProductoVariante::where('producto', $product->id)->get();
		$medidas = ProductoMedida::where('producto',$product->id)->orderBy('orden', 'asc')->get();
		// return view('front.detalles', compact('product','variantes','productos_rel','elements'));
		$data = array(
			'product' => $product,
			'medidas' => $medidas,
		);
		return response()->json($data);
		// return $product;
	}

	public function vacantes(){
		$seccion = Seccion::find(4);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		$vacantes = Vacante ::where('activo',1)->get();

		//$vacantes->requisitos=explode(";",$vacantes->requisitos);
		//dd($vacantes[]->requisitos=explode(";",$vacantes[]->requisitos));
		return view('front.vacantes',compact('elements','vacantes'));
		// return view('front.aboutus');
	}
	public function garantias(){
		$politica = Politica::find(5);
		return view('front.politicas',compact("politica"));
	}

	public function aviso(){
		$politica = Politica::find(1);
		return view('front.politicas',compact("politica"));
	}

	public function pagos(){
		$politica = Politica::find(2);
		return view('front.politicas',compact("politica"));
	}

	public function devoluciones(){
		$politica = Politica::find(3);
		return view('front.politicas',compact("politica"));
	}

	public function tyc(){
		$politica = Politica::find(4);
		return view('front.politicas',compact("politica"));
	}

	public function preguntas(){
		$preguntas = Faq::all();
		return view('front.faq',compact("preguntas"));
	}

	// correo de contacto normal
	public function mailcontact(Request $request){
		$validate = Validator::make($request->all(),[
			'nombre' => 'required',
			'correo' => 'nullable',
			'telefono' => 'required|numeric',
			'mensaje' => 'nullable',
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos datos');
			return redirect()->back();
		}
		$data = array(
			'nombre' => $request->nombre,
			'correo' => $request->correo,
			'telefono' => $request->telefono,
			'mensaje' => $request->mensaje,
			'asunto' => 'Formulario de contacto',
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		$html = view('front.mailcontact',compact('data'));

		$config = Configuracion::first();

		$mail = new PHPMailer;
		$bodyHtml ='
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			
			<title>Document</title>
		</head>
		<body style="
		margin: 0;
		padding: 0;
		font-family: Arial, Helvetica, sans-serif;">

			<div class="cont-correo-display" style="width: 100%;
            height: 100%;
            background: rgb(243, 243, 243);
            display: flex;
            align-items: center;
            justify-content: center;">
				<div class="cont-correo-body" style="width: 70%;
				min-width: 500px;
				max-width: 600px;
				height: 800px;
				background: rebeccapurple;
				margin: 6% auto;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
				box-shadow: 1px 1px 15px 10px rgba(0, 0, 0, 0.2);
				border-radius: 15px;">
					<div class="cont-correo-body-header" style="width: 100%;
					height: 300px;
					border-top-left-radius: 15px;
					border-top-right-radius: 15px;
					background-image: linear-gradient(185deg, #ff6c00 0, #ff5500 16.67%, #ff3a00 33.33%, #f81010 50%, #e8001d 66.67%, #d90025 83.33%, #cb002c 100%);">
						<div class="cont-i" style="width: 100%;
						height: 100%;
						display: flex;
						text-align: center;
						align-items: center;
						justify-content: center;
						flex-direction: column;">
							<i class="far fa-envelope-open"></i>
							<p style="color: #ffffff;
							font-weight: bold;
							margin-top: 15PX;
							font-size: 40PX;
							border-radius: none;
							 ">SEKTOR</p>
							 <div>
							 <img src="mail1.png" alt="" width="100px">
						 </div>
						</div>
						
					</div>
					
					<div class="cont-correo-body-medium" style="width: 100%;
					height: 500px;
					background: white;">
						<div class="cont-mail-txt" style="width: 100%;
						height: 100%;
						display: flex;
						align-items: center;
						flex-direction: column;">
							<h2 style="width: 95%;
							padding-left: 10px;
							padding-right: 10px;
							display: flex;
							text-align: center;
							justify-content: center;
							margin-top: 20px;">'.$data['asunto'].' </h2>
							<div class="cont-nombres-correos" style="font-weight: bold;
							text-align: center;">
								<P class="nombreT" style="margin: 10px auto;">Nombre: '.$data['nombre'].'</P>
								<P class="correoT" style="margin: 10px auto;">Correo: '.$data['correo'].'</P>
								<P class="correoT" style="margin: 10px auto;">Whatsapp: '.$data['telefono'].'</P>
							</div>
							<div class="cont-text-message" style="margin-top: 20px;
							width: 80%;
							height: 60%;
							background: rgb(246, 246, 246);
							overflow-y: scroll;
							scroll-behavior: auto;
							display: flex;
							justify-content: center;
							border-radius: 10px;
							padding-top: 20px;
							padding-left: 20px;
							padding-right: 20px;
							text-align: justify;">
								<p style="">'.$data['mensaje'].'</p>
							</div>
		
						</div>
					</div>
		
				</div>
			</div>
		</body>
		</html>';

		try {
			$mail->isSMTP();
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			// $mail->SMTPDebug = 2;
			$mail->Host = $config->remitentehost;
			$mail->Port = $config->remitenteport;
			$mail->SMTPAuth = true;
			$mail->Username = $config->remitente;
			$mail->Password = $config->remitentepass;
			$mail->SMTPSecure = $config->remitenteseguridad;
			$mail->SetFrom($config->remitente, $config->title);

			$mail->SetFrom($config->remitente, 'Formulario Contacto');
			$mail->isHTML(true);

			$mail->addAddress($config->destinatario,$config->title);
			if (!empty($config->destinatario2)) {
				$mail->AddBCC($config->destinatario2,$config->title);
			}
			$mail->Subject = $data['asunto'];
			$mail->msgHTML($html);
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			\Toastr::success('Correo enviado Exitosamente!');
				return redirect()->back();
		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}

	}

}
