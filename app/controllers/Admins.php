<?php

use App\models\Product;

class Admins extends Controller {
    
    public function __construct(){
        $this->productModel = $this->model('Product');
    }


    public function index(){
        $this->view('admins/index');
    }

    public function manageMeals(){
        $row = $this->productModel->rowCount();
        $data = [
            'row' => $row
        ];
        $this->view('admins/meals/manageMeals', $data);
    }

    public function addProducts(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           $data = [
               'title' => $_POST['title'],
               'carb' => $_POST['carb'],
               'protein' => $_POST['protein'],
               'fat' => $_POST['fat'],
               'kcal' => $_POST['kcal'],
               'title_err' => '',
               'carb_err' => '',
               'protein_err' => '',
               'fat_err' => '',
               'kcal_err' => ''
           ];

           if(empty($data['title'])){
               $data['title_err'] = 'Enter product title';
           }
           if(empty($data['carb'])){
            $data['carb_err'] = 'Enter carb title';
            }
           if(empty($data['protein'])){
            $data['protein_err'] = 'Enter protein title';
            }
           if(empty($data['fat'])){
            $data['fat_err'] = 'Enter fat title';
           }
           if(empty($data['kcal'])){
            $data['kcal_err'] = 'Enter kcal title';
            }

            if( empty($data['title_err']) && empty($data['carb_err']) && empty($data['protein_err']) && empty($data['fat_err']) && empty($data['kcal_err'])){
                if($this->productModel->addProduct($data)){
                    flash('product_add', 'Product added');
                    redirect('admins/manageMeals');
                    }else{
                        die('Something went wrong');
                    }
             }else{

                $this->view('admins/meals/products/addProducts',$data);
            }

       }else{
        $this->view('admins/meals/products/addProducts');
       }
    }

    public function showProducts(){
        $products = $this->productModel->getProducts();
        $data = ['products' => $products];
        $this->view('admins/meals/products/showProducts', $data);
    }

    public function editProduct($id){
         $product = $this->productModel->getProductById($id);
         $data = [
            'id' => $id,
            'title' => $product->title,
            'carb' => $product->carb,
            'protein' => $product->protein,
            'fat' => $product->fat,
            'kcal' => $product->kcal
          ];

         $this->view('admins/meals/products/editProduct', $data);
    }

    public function deleteProduct($id){
         if($this->productModel->deleteProduct($id)){
              flash('product_deleted', 'Product removed');
              redirect('admins/manageMeals');
            }else{
              die('Something went wrong');
            }
   }
        
        

}