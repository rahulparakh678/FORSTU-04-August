<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

DB::table('courses')->insert(array( array('id' => '1','course_name' => 'Class 
        1','course_duration' => '1','created_at' => '2020-06-11 
        12:12:12','updated_at' => '2020-06-11 18:15:25','deleted_at' => 
        NULL,'course_type_id' => '1'),
  array('id' => '2','course_name' => 'Class 2','course_duration' => 
  '1','created_at' => '2020-06-11 18:15:05','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '1'), array('id' => 
  '3','course_name' => 'Class 3','course_duration' => '1','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '4','course_name' => 'Class 
  4','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '5','course_name' => 'Class 
  5','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '6','course_name' => 'Class 
  6','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '7','course_name' => 'Class 
  7','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '8','course_name' => 'Class 
  8','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '9','course_name' => 'Class 
  9','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '10','course_name' => 'Class 
  10','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '1'), array('id' => '11','course_name' => 'Class 
  11 Arts','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '2'), array('id' => '12','course_name' => 'Class 
  11 Commerce','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '2'), array('id' => '13','course_name' => 'Class 
  11 Science','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '2'), array('id' => '14','course_name' => 'Class 
  12 Arts','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '2'), array('id' => '15','course_name' => 'Class 
  12 Commerce','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '2'), array('id' => '16','course_name' => 'Class 
  12 Science','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '2'), array('id' => '17','course_name' => 
  'D.Pharma-Diploma in Pharmacy (DPharma)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '18','course_name' => 'D.Voc Diploma in Vocational D.Voc','course_duration' 
  => '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '19','course_name' => 'Diploma in Chemical Technology','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '20','course_name' => 'Diploma in Digital Electronics','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '21','course_name' => 'Diploma in Dress Designing & Garment 
  Manufacturing','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '22','course_name' => 'Diploma 
  in Electrical & Electronics (Power System)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '23','course_name' => 'Diploma in Electrical Power 
  System','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '24','course_name' => 'Diploma 
  in Food Technology','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '25','course_name' => 'Diploma 
  in Medical Electronics','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '26','course_name' => 'Diploma 
  in Metallurgy Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '27','course_name' => 'Diploma 
  in Mining and Mine Surveying','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '28','course_name' => 'Diploma 
  in Mining Engineering','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '29','course_name' => 'Diploma 
  in Packaging Technology','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '30','course_name' => 'Diploma 
  in Textile Technology','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '31','course_name' => 'Diploma 
  in Travel and Tourism','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '32','course_name' => 'Diploma 
  in A.N.M.-Auxiliary Nurse & Midwife (ANM)','course_duration' => 
  '1','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '33','course_name' => 'Diploma in Apparel Manufacturing and 
  Design','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '34','course_name' => 'Diploma 
  in Architecture Assistantship','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '35','course_name' => 'Diploma 
  in Automobile Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '36','course_name' => 'Diploma 
  in Chemical Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '37','course_name' => 'Diploma 
  in Civil & Rural Engineering Construction Technology','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '38','course_name' => 'Diploma in Civil Engineering','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '39','course_name' => 'Diploma in Computer Engineering','course_duration' 
  => '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '40','course_name' => 'Diploma in Computer Science & 
  Engineering','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '41','course_name' => 'Diploma 
  in Education (D.Ed)','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '42','course_name' => 'Diploma 
  in ElectricalEngineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '43','course_name' => 'Diploma 
  in Electronics & Comm Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '44','course_name' => 'Diploma 
  in Electronics Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '45','course_name' => 'Diploma 
  in Fabrication Technology and Erection Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '46','course_name' => 'Diploma in Garment Technology','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '47','course_name' => 'Diploma in Industrial Electronics','course_duration' 
  => '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '48','course_name' => 'Diploma in Information Technology','course_duration' 
  => '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '49','course_name' => 'Diploma in Instrumentation 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '50','course_name' => 'Diploma 
  in Knitting Technology','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '51','course_name' => 'Diploma 
  in Leather Goods and Footwear Technology','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '52','course_name' => 'Diploma in Leather Technology','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '53','course_name' => 'Diploma in Man Made Textile 
  Chemistry','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '54','course_name' => 'Diploma 
  in Man Made Textile Technology','course_duration' => '1','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '55','course_name' => 'Diploma 
  in Mechanical Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '56','course_name' => 'Diploma 
  in Medical Lab Technology','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '57','course_name' => 'Diploma 
  in Ophthalmic Technology','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '58','course_name' => 'Diploma 
  in Plastic Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '59','course_name' => 'Diploma 
  in Plastic Technology','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '60','course_name' => 'Diploma 
  in Printing Technology','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '61','course_name' => 'Diploma 
  in Sugar Manufacturing','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '62','course_name' => 'Diploma 
  in Textile Applied Chemistry','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '63','course_name' => 'Diploma 
  in Textile Manufacturing','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '64','course_name' => 'Diploma 
  in Administration Services','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '65','course_name' => 'Diploma 
  in Agricultural Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '66','course_name' => 'Diploma 
  in Apperel Manufacturing and Design','course_duration' => '3','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '3'), array('id' => '67','course_name' => 
  'Diploma in CAD-CAM','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '68','course_name' => 'Diploma 
  in Civil Engineering (Sandwich)','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '69','course_name' => 'Diploma 
  in Computer Applications','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '70','course_name' => 'Diploma 
  in Computer Technology','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '71','course_name' => 'Diploma 
  in Construction Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '72','course_name' => 'Diploma 
  in Construction Technology','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '73','course_name' => 'Diploma 
  in Electronic and Communication Technology','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '74','course_name' => 'Diploma in Electronics and Communication 
  Engineering','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '75','course_name' => 'Diploma 
  in Electronics and Telecommunication Engg','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '76','course_name' => 'Diploma in Electronics and Video 
  Engineering','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '77','course_name' => 'Diploma 
  in Electronics Production & Maintenance','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '78','course_name' => 'Diploma in Fabrication Technology and Erection 
  Engineering','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '79','course_name' => 'Diploma 
  in Fashion and Clothing Technology','course_duration' => '3','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '3'), array('id' => '80','course_name' => 
  'Diploma in Fire Engineering','course_duration' => '1','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '81','course_name' => 'Diploma 
  in Fire Service Engineering','course_duration' => '1','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '82','course_name' => 'Diploma 
  in Garment Technology','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '83','course_name' => 'Diploma 
  in Industrial Electronics','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '84','course_name' => 'Diploma 
  in Instrumentation and Control Engineering','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '85','course_name' => 'Diploma in Interior Design','course_duration' => 
  '1','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '86','course_name' => 'Diploma in Interior Design and 
  Decoration','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '87','course_name' => 'Diploma 
  in Jewellery Design & Manufacture Technology','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '88','course_name' => 'Diploma in Machine Engineering','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '89','course_name' => 'Diploma in Mechanical 
  Engineering[Sandwich]','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '90','course_name' => 'Diploma 
  in Mechatronics','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '91','course_name' => 'Diploma 
  in Ophthalmic Technology','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '92','course_name' => 'Diploma 
  in Petro Chemical Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '93','course_name' => 'Diploma 
  in Production Engineering','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '94','course_name' => 'Diploma 
  in Production Technology','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '95','course_name' => 'Diploma 
  in Pulp Technology','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '96','course_name' => 'Diploma 
  in Rubber Technology','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '97','course_name' => 'Diploma 
  in Sugar Technology','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '98','course_name' => 'Diploma 
  in Technical Chemistry','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '99','course_name' => 'Diploma 
  in Textile Chemistry','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '100','course_name' => 
  'Diploma in Textile Manufactures','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '101','course_name' => 
  'Diploma in Town Planning','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '102','course_name' => 
  'Diploma in Travel and Tourism','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '103','course_name' => 
  'Diploma in Design','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '104','course_name' => 
  'Diploma in Event Management','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '105','course_name' => 
  'Diploma in Export and Import Management course','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '106','course_name' => 'Diploma in Fashion Design','course_duration' => 
  '1','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '107','course_name' => 'Diploma in Film Editing','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '108','course_name' => 'Diploma in Film Making','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '109','course_name' => 'Diploma in Acting & Drama','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '110','course_name' => 'Diploma in advertising and commercial 
  management','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '111','course_name' => 
  'G.N.M.-General Nursing & Midwifery (GNM)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '3'), array('id' => 
  '112','course_name' => 'Diploma In Biomedical 
  Engineering','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '3'), array('id' => '113','course_name' => 
  'Diploma in Architecture Engineering','course_duration' => '3','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '3'), array('id' => '114','course_name' => 
  'Diploma in Fire & Safety Management','course_duration' => '1','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '3'), array('id' => '115','course_name' => 
  'AGRO PROCESSING','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '116','course_name' => 
  'ARCHITECTURAL ASSISTANT','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '117','course_name' => 
  'ARCHITECTURAL DRAUGHTSMAN','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '118','course_name' => 
  'ARCHITECTURAL DRAUGHTSMAN (NE)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '119','course_name' => 
  'ATTENDANT OPERATOR (CHEMICAL PLANT)','course_duration' => '2','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '6'), array('id' => '120','course_name' => 
  'AUTO ELECTRICIAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '121','course_name' => 
  'AUTOMOBILE SECTOR','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '122','course_name' => 
  'AUTOMOTIVE BODY/PAINT REPAIR','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '123','course_name' => 'BAKER 
  AND CONFECTIONERY','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '124','course_name' => 'BAMBOO 
  WORKS','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '125','course_name' => 'BASIC 
  COMPUTER COURSE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '126','course_name' => 'BASIC 
  COSMETOLOGY','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '127','course_name' => 
  'BUILDING MAINTENANCE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '128','course_name' => 
  'BUSINESS MANAGEMENT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '129','course_name' => 
  'CABIN/ROOM ATTENDANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '130','course_name' => 'CALL 
  CENTRE ASSISTANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '131','course_name' => 'CANE 
  WILLOW AND BAMBOO WORKER','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '132','course_name' => 
  'CARPENTER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '133','course_name' => 
  'CATERING & HOSPITALITY ASSISTANT','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '134','course_name' => 'CIVIL 
  ENGINEER ASSISTANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '135','course_name' => 
  'COMMERCIAL ART','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '136','course_name' => 
  'COMPUTER AIDED EMBROIDERY AND DESIGNING','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '137','course_name' => 'COMPUTER HARDWARE & NETWORK 
  MAINTENANCE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '138','course_name' => 
  'COMPUTER OPERATOR AND PROGRAMMING ASSISTANT','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '139','course_name' => 'COMPUTER OPERATOR & PROGRAMMING 
  ASSISTANT/COPA','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '140','course_name' => 
  'CORPORATE HOUSE KEEPING','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '141','course_name' => 
  'CRAFTSMAN FOOD PRODUCTION','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '142','course_name' => 'CRECHE 
  MANAGEMENT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '143','course_name' => 
  'DAIRYING','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '144','course_name' => 'DATA 
  BASE SYSTEM ASSISTANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '145','course_name' => 'DATA 
  ENTRY OPERATOR','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '146','course_name' => 'DENTAL 
  LABORATORY EQUIPMENT TECHNICIAN','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '147','course_name' => 'DENT 
  BEATING & SPRAY PAINTING','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '148','course_name' => 
  'DESKTOP PUBLISHING OPERATOR','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '149','course_name' => 
  'DIGITAL PHOTOGRAPHER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '150','course_name' => 
  'DOMESTIC PAINTER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '151','course_name' => 
  'DRAUGHTSMAN (CIVIL)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '152','course_name' => 
  'DRAUGHTSMAN (MECHANICAL)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '153','course_name' => 'DRESS 
  MAKING','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '154','course_name' => 'DRIVER 
  CUM MECHANIC','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '155','course_name' => 
  'ELECTRICIAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '156','course_name' => 
  'ELECTRONICS MECHANIC','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '157','course_name' => 
  'ELECTROPLATER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '158','course_name' => 'EVENT 
  MANAGEMENT ASSITANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '159','course_name' => 
  'FASHION DESIGN TECHNOLOGY','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '160','course_name' => 
  'FINANCE EXECUTIVE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '161','course_name' => 'FIRE 
  TECHNOLOGY AND INDUSTRIAL SAFETY MANAGEMENT','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '162','course_name' => 'FLORICULTURE & LANDSCAPING','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '163','course_name' => 'FOOD BEVERAGE','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '164','course_name' => 'FOOD & BEVERAGES GUEST SERVICES 
  ASSISTANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '165','course_name' => 
  'FOOTWEAR MAKER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '166','course_name' => 
  'FOUNDRYMAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '167','course_name' => 'FRONT 
  OFFICE ASSISTANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '168','course_name' => 'FRUIT 
  AND VEGETABLE PROCESSOR','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '169','course_name' => 'HAIR & 
  SKIN CARE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '170','course_name' => 'HEALTH 
  & SANITARY INSPECTOR','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '171','course_name' => 
  'HOSPITAL HOUSE KEEPING','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '172','course_name' => 'HUMAN 
  RESOURCE EXECUTIVE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '173','course_name' => 
  'INDUSTRIAL PAINTER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '174','course_name' => 
  'INFORMATION COMMUNICATION TECHNOLOGY SYSTEM MAINTENANCE','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '175','course_name' => 'INFORMATION TECHNOLOGY & ELECTRONIC SYSTEM 
  MAINTENANCE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '176','course_name' => 
  'INSTRUMENT MECHANIC','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '177','course_name' => 
  'INSTRUMENT MECHANIC (CHEMICAL PLANT)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '178','course_name' => 'INSURANCE AGENT','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '179','course_name' => 'INTERIOR DECORATION & DESIGNING','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '180','course_name' => 'INTERIOR DESIGN & DECORATION','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '181','course_name' => 'LABORATORY ASSISTANT (CHEMICAL 
  PLANT)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '182','course_name' => 
  'LEATHER GOODS MAKER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '183','course_name' => 
  'LIBRARY & INFORMATION SCIENCE','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '184','course_name' => 'LIFT 
  AND ESCALATOR MECHANIC','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '185','course_name' => 'LIFT 
  MECHANIC (P)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '186','course_name' => 'LITHO- 
  OFFSET MACHINE MINDER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '187','course_name' => 
  'MACHINIST','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '188','course_name' => 
  'MAINTENANCE MECHANIC (CHEMICAL PLANT)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '189','course_name' => 'MARINE ENGINE FITTER','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '190','course_name' => 'MARINE FITTER','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '191','course_name' => 'MARKETING EXECUTIVE','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '192','course_name' => 'MASON (BUILDING CONSTRUCTOR)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '193','course_name' => 'MECHANIC AGRICULTURE MACHINERY','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '194','course_name' => 'MECHANIC AIR-CONDITIONING PLANT','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '195','course_name' => 'MECHANIC AUTO BODY PAINTING','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '196','course_name' => 'MECHANIC AUTO BODY REPAIR','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '197','course_name' => 'MECHANIC AUTO ELECTRICAL AND 
  ELECTRONICS','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '198','course_name' => 
  'MECHANIC COMMUNICATION EQUIPMENT MAINTENANCE','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '199','course_name' => 'MECHANIC COMPUTER HARDWARE','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '200','course_name' => 'MECHANIC CONSUMER ELECTRONICS','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '201','course_name' => 'MECHANIC CONSUMER ELECTRONICS 
  APPLIANCES','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '202','course_name' => 
  'MECHANIC CUM OPERATOR ELECTRONICS COMMUNICATION SYSTEM','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '203','course_name' => 'MECHANIC DIESEL','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '204','course_name' => 'MECHANIC INDUSTRIAL ELECTRONICS','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '205','course_name' => 'MECHANIC LENS/PRISM GRINDING','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '206','course_name' => 'MECHANIC MACHINE TOOL 
  MAINTENANCE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '207','course_name' => 
  'MECHANIC MECHATRONICS','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '208','course_name' => 
  'MECHANIC MEDICAL ELECTRONICS','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '209','course_name' => 
  'MECHANIC MINING MACHINERY','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '210','course_name' => 
  'MECHANIC MOTOR CYCLE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '211','course_name' => 
  'MECHANIC (MOTOR VEHICLE)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '212','course_name' => 
  'MECHANIC RADIO & T.V.','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '213','course_name' => 
  'MECHANIC (REFRIGERATION AND AIR-CONDITIONER)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '214','course_name' => 'MECHANIC (TRACTOR)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '215','course_name' => 'MECH. REPAIR & MAINTENANCE OF HEAVY 
  VEHICLES','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '216','course_name' => 
  'MEDICAL TRANSCRIPTION','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '217','course_name' => 'METAL 
  CUTTING ATTENDANT (VI)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '218','course_name' => 'MOTOR 
  DRIVING & HEAVY EARTH MOVING MACHINERY OPERATOR','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '219','course_name' => 'MULTIMEDIA ANIMATION & SPECIAL 
  EFFECTS','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '220','course_name' => 
  'NETWORK TECHNICIAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '221','course_name' => 'OFFICE 
  ASSITANT CUM COMPUTER OPERATOR','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '222','course_name' => 'OFFICE 
  MACHINE OPERATOR','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '223','course_name' => 'OLD 
  AGE CARE ASSISTANT','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '224','course_name' => 
  'OPERATOR ADVANCED MACHINE TOOLS','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '225','course_name' => 
  'PAINTER GENERAL','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '226','course_name' => 
  'PHOTOGRAPHER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '227','course_name' => 
  'PHYSIOTHERAPY TECHNICIAN','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '228','course_name' => 
  'PLASTIC PROCESSING OPERATOR','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '229','course_name' => 'PLATE 
  MAKER-CUM-IMPOSITOR','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '230','course_name' => 
  'PRE/PREPARATORY SCHOOL MANAGEMENT (ASSISTANT)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '231','course_name' => 'PROCESS CAMERAMAN','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '232','course_name' => 'PRODUCTION & MANUFACTURING 
  SECTOR','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '233','course_name' => 'PUMP 
  OPERATOR-CUM-MECHANIC','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '234','course_name' => 
  'RADIOLOGY TECHNICIAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '235','course_name' => 
  'REFRACTORY TECHNICIAN','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '236','course_name' => 'RUBBER 
  TECHNICIAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '237','course_name' => 
  'SANITARY HARDWARE FITTER','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '238','course_name' => 
  'SECRETARIAL PRACTICE','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '239','course_name' => 'SHEET 
  METAL WORKER','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '240','course_name' => 'SHEET 
  METAL WORKER (DA)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '241','course_name' => 
  'SOFTWARE TESTING ASSISTANT','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '242','course_name' => 'SPA 
  THERAPY','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '243','course_name' => 
  'SPINNING TECHNICIAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '244','course_name' => 
  'STENOGRAPHER & SECRETARIAL ASSISTANT (ENGLISH)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '245','course_name' => 'STENOGRAPHER & SECRETARIAL ASSISTANT 
  (HINDI)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '246','course_name' => 'STONE 
  MINING MACHINE OPERATOR','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '247','course_name' => 'STONE 
  PROCESSING MACHINE OPERATOR','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '248','course_name' => 
  'SURFACE ORNAMENTATION TECHNIQUES (EMBROIDERY)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '249','course_name' => 'TECHNICIAN POWER ELECTRONICS 
  SYSTEM','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '250','course_name' => 
  'TEXTILE MECHATRONICS','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '251','course_name' => 
  'TEXTILE WET PROCESSING TECHNICIAN','course_duration' => '2','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '6'), array('id' => '252','course_name' => 
  'TOOL & DIE MAKER (DIES & MOULDS)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '253','course_name' => 'TOOL & 
  DIE MAKER (PRESS TOOLS, JIGS & FIXTURES)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '254','course_name' => 'TRAVEL & TOUR ASSISTANT','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '255','course_name' => 'VESSEL NAVIGATOR','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '256','course_name' => 'WEAVING OF WOOLEN FABRICS','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '257','course_name' => 'WEAVING TECHNICIAN','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '6'), array('id' => 
  '258','course_name' => 'WEAVING TECHNICIAN FOR SILK & WOOLEN 
  FABRICS','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '259','course_name' => 'WELDER 
  (DA)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '260','course_name' => 'WELDER 
  (FABRICATION & FITTING)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '261','course_name' => 'WELDER 
  (GMAW & GTAW)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '262','course_name' => 'WELDER 
  (STRUCTURAL)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '263','course_name' => 
  'WIREMAN','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '6'), array('id' => '264','course_name' => 
  'B.A.-Bachelor of Arts (BA)','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '265','course_name' => 
  'Bachelor of Arts in Foreign Languages','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '266','course_name' => 'Bachelor of Planning and Design','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '267','course_name' => 'B.Agri.-Bachelor of Agriculture 
  (BAgri)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '268','course_name' => 
  'B.A.(Hons)-Bachelor of Arts (Honors) (BA Honors)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '269','course_name' => 'B.A.M.S.-Bachelor of Ayurved Medicine & Surgery 
  (BAMS)','course_duration' => '6','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '270','course_name' => 
  'B.Architecture-Bachelor of Architecture (BArchitecture)','course_duration' 
  => '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '271','course_name' => 'B.A.S.L.P.-Bachelor of Audiology and Speech 
  Language Pathology (BASLP)','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '272','course_name' => 
  'B.B.A.-Bachelor of Business Administration (BBA)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '273','course_name' => 'B.B.M.-Bachelor of Business Management 
  (BBM)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '274','course_name' => 
  'B.B.S.-Bachelor of Business Studies (BBS)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '275','course_name' => 'B.C.A.-Bachelor of Computer Applications 
  (BCA)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '276','course_name' => 
  'B.C.E.-Bachelor of Civil Engineering (BCE)','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '277','course_name' => 'B.Ch.E.-Bachelor of Chemical Engineering 
  (BChE)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '278','course_name' => 
  'B.Chem.Tech.-Bachelor of Chemical Technology 
  (BChemTech)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '279','course_name' => 
  'B.Com.-Bachelor of Commerce (BCom)','course_duration' => '3','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '280','course_name' => 
  'B.Des.-Bachelor of Design (BDes)','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '281','course_name' => 
  'B.D.S.-Bachelor of Dental Surgery (BDS)','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '282','course_name' => 'B.E/B.Tech in Aeronautical 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '283','course_name' => 
  'B.E/B.Tech in Agricultural Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '284','course_name' => 'B.E/B.Tech in Artificial 
  Intelligence','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '285','course_name' => 
  'B.E/B.Tech in Automobile Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '286','course_name' => 'B.E/B.Tech in B.Planning','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '287','course_name' => 'B.E/B.Tech in B.Tech Planning','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '288','course_name' => 'B.E/B.Tech in Bio Medical 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '289','course_name' => 
  'B.E/B.Tech in Bio Technology','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '290','course_name' => 
  'B.E/B.Tech in Chemical Engineering','course_duration' => '4','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '291','course_name' => 
  'B.E/B.Tech in Chemical Technology','course_duration' => '4','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '292','course_name' => 
  'B.E/B.Tech in Civil and Water Management Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '293','course_name' => 'B.E/B.Tech in Civil Engineering','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '294','course_name' => 'B.E/B.Tech in Civil Engineering (Construction 
  Technology)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '295','course_name' => 
  'B.E/B.Tech in Computer Engineering','course_duration' => '4','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '296','course_name' => 
  'B.E/B.Tech in Computer Science','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '297','course_name' => 
  'B.E/B.Tech in Computer Science and Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '298','course_name' => 'B.E/B.Tech in Computer Science and Information 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '299','course_name' => 
  'B.E/B.Tech in Computer Science and Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '300','course_name' => 'B.E/B.Tech in Computer 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '301','course_name' => 
  'B.E/B.Tech in Design','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '302','course_name' => 
  'B.E/B.Tech in Dyestuff Technology','course_duration' => '4','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '303','course_name' => 
  'B.E/B.Tech in Electrical and Electronics [Power System]','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '304','course_name' => 'B.E/B.Tech in Electrical and Electronics 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '305','course_name' => 
  'B.E/B.Tech in Electrical and Instrumentation 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '306','course_name' => 
  'B.E/B.Tech in Electrical and Power Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '307','course_name' => 'B.E/B.Tech in Electrical Engg [Electrical and 
  Power]','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '308','course_name' => 
  'B.E/B.Tech in Electrical Engg[Electronics and Power]','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '309','course_name' => 'B.E/B.Tech in Electrical 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '310','course_name' => 
  'B.E/B.Tech in Electrical, Electronics and Power','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '311','course_name' => 'B.E/B.Tech in Electronics & Communication 
  Engineering(Sandwich)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '312','course_name' => 
  'B.E/B.Tech in Electronics and Communication Engineering','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '313','course_name' => 'B.E/B.Tech in Electronics and Communication 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '314','course_name' => 
  'B.E/B.Tech in Electronics and Computer Science','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '315','course_name' => 'B.E/B.Tech in Electronics and Electrical 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '316','course_name' => 
  'B.E/B.Tech in Electronics and Power Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '317','course_name' => 'B.E/B.Tech in Electronics and Telecommuincation 
  Engg [Technologynician Electronic Radio]','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '318','course_name' => 'B.E/B.Tech in Electronics and Telecommunication 
  Engg','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '319','course_name' => 
  'B.E/B.Tech in Electronics Design Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '320','course_name' => 'B.E/B.Tech in Electronics 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '321','course_name' => 
  'B.E/B.Tech in Electronics System Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '322','course_name' => 'B.E/B.Tech in Electronics 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '323','course_name' => 
  'B.E/B.Tech in Environmental Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '324','course_name' => 'B.E/B.Tech in Environmental Science and 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '325','course_name' => 
  'B.E/B.Tech in Fashion Technology','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '326','course_name' => 
  'B.E/B.Tech in Fibres and Textile Processing Technology','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '327','course_name' => 'B.E/B.Tech in Food Engineering and 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '328','course_name' => 
  'B.E/B.Tech in Food Technology','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '329','course_name' => 
  'B.E/B.Tech in Industrial Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '330','course_name' => 'B.E/B.Tech in Information 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '331','course_name' => 
  'B.E/B.Tech in Instrumentation and Control Engineering','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '332','course_name' => 'B.E/B.Tech in Instrumentation 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '333','course_name' => 
  'B.E/B.Tech in Man Made Textile Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '334','course_name' => 'B.E/B.Tech in Marine Engineering','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '335','course_name' => 'B.E/B.Tech in Mechanical & Automation 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '336','course_name' => 
  'B.E/B.Tech in Mechanical Automation Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '337','course_name' => 'B.E/B.Tech in Mechanical 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '338','course_name' => 
  'B.E/B.Tech in Mechanical Engineering (Auto)','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '339','course_name' => 'B.E/B.Tech in Mechanical Engineering 
  Automobile','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '340','course_name' => 
  'B.E/B.Tech in Mechanical Engineering[Sandwich]','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '341','course_name' => 'B.E/B.Tech in Mechatronics 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '342','course_name' => 
  'B.E/B.Tech in Mechatronics Engineering (Sandwich)','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '343','course_name' => 'B.E/B.Tech in Metallurgical 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '344','course_name' => 
  'B.E/B.Tech in Mining Engineering','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '345','course_name' => 
  'B.E/B.Tech in Oil and Paints Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '346','course_name' => 'B.E/B.Tech in Oil Fats and Waxes 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '347','course_name' => 
  'B.E/B.Tech in Oil Technology','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '348','course_name' => 
  'B.E/B.Tech in Oil,Oleochemicals and Surfactants 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '349','course_name' => 
  'B.E/B.Tech in Paints Technology','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '350','course_name' => 
  'B.E/B.Tech in Paper and Pulp Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '351','course_name' => 'B.E/B.Tech in Petro Chemical 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '352','course_name' => 
  'B.E/B.Tech in Petro Chemical Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '353','course_name' => 'B.E/B.Tech in Petroleum 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '354','course_name' => 
  'B.E/B.Tech in Petroleum Technology','course_duration' => '4','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '355','course_name' => 
  'B.E/B.Tech in Pharmaceutical and Fine Chemical 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '356','course_name' => 
  'B.E/B.Tech in Pharmaceuticals Chemistry and Technology','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '357','course_name' => 'B.E/B.Tech in Plastic and Polymer 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '358','course_name' => 
  'B.E/B.Tech in Plastic and Polymer Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '359','course_name' => 'B.E/B.Tech in Plastic Technology','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '360','course_name' => 'B.E/B.Tech in Polymer 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '361','course_name' => 
  'B.E/B.Tech in Polymer Engineering and Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '362','course_name' => 'B.E/B.Tech in Polymer Technology','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '363','course_name' => 'B.E/B.Tech in Power Engineering','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '364','course_name' => 'B.E/B.Tech in Printing and Packing 
  Technology','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '365','course_name' => 
  'B.E/B.Tech in Printing Engineering and Graphics 
  Communication','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '366','course_name' => 
  'B.E/B.Tech in Printing Technology','course_duration' => '4','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '367','course_name' => 
  'B.E/B.Tech in Production Engineering','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '368','course_name' => 'B.E/B.Tech in Production 
  Engineering[Sandwich]','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '369','course_name' => 
  'B.E/B.Tech in Pulp Technology','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '370','course_name' => 
  'B.E/B.Tech in Surface Coating Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '371','course_name' => 'B.E/B.Tech in Textile Chemistry','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '372','course_name' => 'B.E/B.Tech in Textile Engineering (Fashion 
  Technology)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '373','course_name' => 
  'B.E/B.Tech in Textile Engineering / Technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '374','course_name' => 'B.E/B.Tech in Textile Plant 
  Engineering','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '375','course_name' => 
  'B.E/B.Tech in Textile Technology','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '376','course_name' => 
  'B.E/B.Tech in Town and Country Planning','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '377','course_name' => 'B.Ed.-Bachelor of Education 
  (BEd)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '378','course_name' => 
  'B.F.A.-Bachelor of Fine Arts (BFA)','course_duration' => '3','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '379','course_name' => 
  'B.F.Sc.-Bachelor of Fisheries Science (BFSc)','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '380','course_name' => 'B.F.Tech.-Bachelor of Fashion Technology 
  (BFTech)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '381','course_name' => 
  'B.G.L.-Bachelor of General Law (BGL)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '382','course_name' => 'B.H.A.-Bachelor of Hospital Administration 
  (BHA)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '383','course_name' => 
  'B.H.M.-Bachelor of Hotel Management (BHM)','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '384','course_name' => 'B.H.M.C.T.-Bachelor of Hotel Management and 
  Catering Technology (BHMCT)','course_duration' => '4','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '385','course_name' => 
  'B.H.M.S.-Bachelor of Homeopathic Medicine and Surgery 
  (BHMS)','course_duration' => '6','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '386','course_name' => 
  'B.H.M.T.T.-Bachelor of Hotel Management, Travel and Tourism 
  (BHMTT)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '387','course_name' => 
  'B.H.T.M.-Bachelor of Hotel and Tourism Management 
  (BHTM)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '388','course_name' => 
  'B.I.B.F.-Bachelor of International Business and Finance 
  (BIBF)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '389','course_name' => 
  'B.J.-Bachelor of Journalism (BJ)','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '390','course_name' => 
  'B.J.M.C.-Bachelor of Journalism and Mass Communication 
  (BJMC)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '391','course_name' => 
  'B.L.-Bachelor of Law or Laws (BL)','course_duration' => '5','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '4'), array('id' => '392','course_name' => 
  'B.Lib.I.Sc.-Bachelor of Library & Information Science 
  (BLibISc)','course_duration' => '1','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '393','course_name' => 
  'B.Lib.Sc.-Bachelor of Library Science (BLibSc)','course_duration' => 
  '1','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '394','course_name' => 'B.Litt.-Bachelor of Literature 
  (BLitt)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '395','course_name' => 
  'B.M.M.-Bachelor of Multi Media (BMM)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '396','course_name' => 'B.M.S.-Bachelor of Management Studies 
  (BMS)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '397','course_name' => 
  'B.Mus.-Bachelor of Music (BMus)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '398','course_name' => 
  'B.Nat.(Yogic Sciences)-Bachelor of Naturopathy and Yogic Sciences 
  (BNat)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '399','course_name' => 
  'B.N.Y.S.-Bachelor of Naturopathy and Yogic Sciences 
  (BNYS)','course_duration' => '5','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '400','course_name' => 
  'B.O.L.-Bachelor of Oriental Learning (BOL)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '401','course_name' => 'B.Optom.-Bachelor of Clinical Optometry 
  (BOptom)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '402','course_name' => 
  'B.O.T.-Bachelor of Occupational Therapy (BOT)','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '403','course_name' => 'B.P.A.-Bachelor of Performing Arts 
  (BPA)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '404','course_name' => 
  'B.P.E.-Bachelor of Physical Education (BPE)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '405','course_name' => 'B.P.Ed.-Bachelor of Physical Education 
  (BPEd)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '406','course_name' => 
  'B.Pharm.(Ayu.) -Bachelor of Ayurved in Pharmacy (BPharm 
  Ayurved)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '407','course_name' => 
  'B.Pharm.-Bachelor of Pharmacy (BPharm)','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '408','course_name' => 'B.Plan.-Bachelor of Planning 
  (BPlan)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '409','course_name' => 
  'B.P.T.-Bachelor of Physiotherapy (BPT)','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '410','course_name' => 'B.Sc.Agriculture.-Bachelor of Agriculture 
  (BScAgri)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '411','course_name' => 
  'B.Sc.-Bachelor of Science (BSc)','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '412','course_name' => 
  'B.Sc.(Hons)-Bachelor of Science (Honors) (BSc Honors)','course_duration' 
  => '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '413','course_name' => 'B.Sc in Biotechnology','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '414','course_name' => 'B.Sc in Environmental Science','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '415','course_name' => 'B.Sc. (Cs) Bachelor of Science in Computer Science 
  (BSc Computer Sc)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '416','course_name' => 'B.Sc. 
  (IT) Bachelor of Science in Information Technology (BSc 
  IT)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '417','course_name' => 
  'B.Sc.(Nursing)-Bachelor of Science in Nursing (BSc 
  Nursing)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '418','course_name' => 
  'B.S.Course-Bachelor of Science (Physician Assistant and Emergency & Trauma 
  Care Management) (BS)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '419','course_name' => 
  'B.Sc.(Post Basic)-B.Sc (Post Basic) (BSc)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '420','course_name' => 'B.Sc.(Sericulture)-Bachelor of Science in 
  Sericulture (Bsc)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '421','course_name' => 
  'B.S.M.S.-Bachelor of Sridhar Medicine and Surgery 
  (BSMS)','course_duration' => '6','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '422','course_name' => 
  'B.S.S.-Bachelor in Social Sciences (BSS)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '423','course_name' => 'B.Stat.-Bachelor of Statistics 
  (BStat)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '424','course_name' => 
  'B.S.W.-Bachelor of Social Work (BSW)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '425','course_name' => 'B.Tech in dairy technology','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '426','course_name' => 'B.U.M.S.-Bachelor of Unani Medicine and Surgery 
  (BUMS)','course_duration' => '6','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '427','course_name' => 
  'B.Voc.-Bachelor of Vocational Education (BVoc)','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '428','course_name' => 'B.V.Sc.&A.H.-Bachelor of Veterinary Science & 
  Animal Husbandry (BVSc&AH)','course_duration' => '5','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '429','course_name' => 
  'B.V.Sc.-Bachelor of Veterinary Science (BVSc)','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'), array('id' => 
  '430','course_name' => 'L.L.B.-Bachelor of Law or Laws 
  (LLB)','course_duration' => '3','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '431','course_name' => 
  'M.B.B.S.-Bachelor of Medicine and Bachelor of Surgery 
  (MBBS)','course_duration' => '6','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '4'), array('id' => '432','course_name' => 
  'L.L.M.-Master of Law or Laws (LLM)','course_duration' => '2','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '5'), array('id' => '433','course_name' => 
  'M.A.Archaeology.-Master of Arts in Archaeology (MAArch)','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '434','course_name' => 'M.A.-Master of Arts (MA)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '435','course_name' => 'M.A.M.S.-Master of Ayurved in Medicine and Surgery 
  (MAMS)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '436','course_name' => 
  'M.Arch.-Master of Architecture (MArch)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '437','course_name' => 'Master of Computer Management','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '438','course_name' => 'Master of Computer Science','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '439','course_name' => 'Masters in Archaeology/Ancient Indian 
  History','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '440','course_name' => 
  'M.B.A.- Master of Business Administration (MBA)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '441','course_name' => 'M.B.A.(Pharma. Tech.)-Master of Business 
  Administration in Pharmaceutical Technology (MBA)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '442','course_name' => 'M.B.A.(Tech.)-Master of Business Administration in 
  Technology (MBA)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '443','course_name' => 'M.C.A. 
  -Master of Computer Applications (MCA)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '444','course_name' => 'M.Com.-Master of Commerce (MCom)','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '445','course_name' => 'M.Dance-Master of Dance (MDance)','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '446','course_name' => 'M.Des.-Master of Design (MDes)','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '447','course_name' => 'M.D.S.-Master of Dental Surgery 
  (MDS)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '448','course_name' => 'M.Ed. 
  -Master of Education (MEd)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '449','course_name' => 
  'M.E.-Master of Engineering (ME)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '450','course_name' => 'M.F.A. 
  -Master of Fine Arts (MFA)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '451','course_name' => 
  'M.F.M.-Master of Fashion Management (MFM)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '452','course_name' => 'M.F.M. -Master of Financial Management 
  (MFM)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '453','course_name' => 
  'M.F.Sc. -Master of Fishery Science (MFSc)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '454','course_name' => 'M.F.Tech.-Master of Fashion Technology 
  (MFTech)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '455','course_name' => 'M.F.T. 
  -Master of Foreign Trade (MFT)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '456','course_name' => 'M.H.A. 
  -Master of Hospital Administration (MHA)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '457','course_name' => 'M.H.M.S.-Master of Homeopathic Medicine and Science 
  (MHMS)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '458','course_name' => 
  'M.H.R.D. -Master of Human Resource Development (MHRD)','course_duration' 
  => '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '459','course_name' => 'M.I.B.-Master of International Business 
  (MIB)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '460','course_name' => 
  'M.J.-Master of Journalism (MJ)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '461','course_name' => 
  'M.J.M.C.-Master of Journalism and Mass Communication 
  (MJMC)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '462','course_name' => 
  'M.Lib.Sc. -Master of Library Science (MLibSc)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '463','course_name' => 'M.L.I.Sc.-Master of Library & Information Science 
  (MLISc)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '464','course_name' => 
  'M.Litt.-Master of Literature or Master of Letters 
  (MLitt)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '465','course_name' => 'M.L. 
  -Master of Laws (ML)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '466','course_name' => 
  'M.M.C.-Master in Mass Communication (MMC)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '467','course_name' => 'M.Mgt.-Master of Management 
  (MMgt)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '468','course_name' => 
  'M.Mkt.M. -Master of Marketing Management (MMktM)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '469','course_name' => 'M.M.S.-Master of Management 
  Studies','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '470','course_name' => 'M.Mus. 
  -Master of Music (MMus)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '471','course_name' => 'M.O.L. 
  -Master of Oriental Learning (MOL)','course_duration' => '2','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '5'), array('id' => '472','course_name' => 
  'M.Optom. -Master of Optometry (MOptom)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '473','course_name' => 'M.O.T. -Master of Occupational Therapy 
  (MOT)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '474','course_name' => 
  'M.P.A.-Master of Performing Arts (MPA)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '475','course_name' => 'M.P.Ed.-Master of Physical Education 
  (MPEd)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '476','course_name' => 
  'M.P.E.-Master of Physical Education (MPE)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '477','course_name' => 'M.Pharm. -Master of Pharmacy 
  (MPharm)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '478','course_name' => 
  'M.Phil.-Master of Philosophy (MPhil)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '479','course_name' => 'M.P.H. -Master of Public Health 
  (MPH)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '480','course_name' => 
  'M.Plan.-Master of Planning (MPlan)','course_duration' => '2','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '5'), array('id' => '481','course_name' => 
  'M.P.S. -Master of Population Studies (MPS)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '482','course_name' => 'M.P.T.-Master of Physiotherapy 
  (MPT)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '483','course_name' => 'Msc. 
  In Animal Husbandry','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '484','course_name' => 
  'M.Sc.-Master of Science (MSc)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '485','course_name' => 
  'M.Sc.(Medical Anatomy) -Master of Science in Medical Anatomy (MSc Medical 
  Anatomy)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '486','course_name' => 
  'M.Sc.(Medical Bio-Chemistry)-Master of Science in Medical Bio-Chemistry 
  (Msc Medical BioChemistry)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '487','course_name' => 
  'M.Sc.(Medical Microbiology)-Master of Science in Medical Microbiology (MSc 
  Medical Microbiology)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '488','course_name' => 
  'M.Sc.(Medical Pharmacology)-Master of Science in Medical Pharmacology (MSc 
  Medical Pharmacology)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '489','course_name' => 
  'M.Sc.(Medical Physiology)-Master of Science in Medical Physiology (MSc 
  Medical Physiology)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '490','course_name' => 'M.Sc. 
  Nursing-Master of Science in Nursing (MSc Nursing)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '491','course_name' => 'M.Sc. Tech.(Applied Geo-Physics)-Master of Science 
  in Technology (Applied Geo-Physics) (MScTech)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '492','course_name' => 'M.Sc. Tech. -Master of Science in Technology 
  (MScTech)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '493','course_name' => 
  'M.S.-Master of Science (MS)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '494','course_name' => 
  'M.S.-Master of Surgery (MS)','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '495','course_name' => 
  'M.Stat. -Master of Statistics (MStat)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '496','course_name' => 'M.S.W.-Master of Social Work 
  (MSW)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '497','course_name' => 'M.Tech 
  in Agriculture','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '498','course_name' => 
  'M.Tech. -Master of Technology (MTech)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '499','course_name' => 'M.T.P.M.-Master in Transportation Planning and 
  Management (MTPM)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '500','course_name' => 
  'M.U.P.-Master of Urban Planning (MUP)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '501','course_name' => 'M.V.Sc. -Master of Veterinary Sciences 
  (MVSc)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '502','course_name' => 
  'Parangat-Parangat','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '503','course_name' => 'PG 
  Diploma-Post Graduate Diploma','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '504','course_name' => 
  'P.G.D.M.-Post-Graduate Diploma in Management (PGDM)','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'), array('id' => 
  '505','course_name' => 'P.G.P.-Post-Graduate Programme in Management 
  (PGP)','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '506','course_name' => 
  'Pharm.D.-Doctor of Pharmacy','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '507','course_name' => 'Samaj 
  Karya Parangat-Samaj Karya Parangat','course_duration' => '2','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '5'), array('id' => '508','course_name' => 
  'Shiksha Acharya-Shiksha Acharya','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '5'), array('id' => '509','course_name' => 
  'Shikshan Parangat-Shikshan Parangat','course_duration' => '2','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '5'), array('id' => '510','course_name' => 
  'B.A. B.Ed.-Bachelor of Arts, Bachelor of Education 
  (BA/BEd)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '511','course_name' => 'B.A. 
  L.L.B.-Bachelor of Arts, Bachelor of Law or Laws 
  (BA/LLB)','course_duration' => '5','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '512','course_name' => 'B.B.A. 
  L.L.B.-Bachelor of Business Administration, Bachelor of Law or Laws 
  (BBA/LLB)','course_duration' => '5','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '513','course_name' => 'B.Com. 
  B.Ed.-Bachelor of Commerce, Bachelor of Education 
  (BCom/BEd)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '514','course_name' => 'B.Com. 
  L.L.B.-Bachelor of Commerce, Bachelor of Law (BCom/LLB)','course_duration' 
  => '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '7'), array('id' => 
  '515','course_name' => 'B.Sc. B.Ed.-Bachelor of Science, Bachelor of 
  Education (BSc/BEd)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '516','course_name' => 'B.Sc. 
  L.L.B.-Bachelor of Science, Bachelor of Law or Laws 
  (BSc/LLB)','course_duration' => '5','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '517','course_name' => 'B.S. 
  M.S.-Bachelor of Science, Master of Science (BS/MS)','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '7'), array('id' => 
  '518','course_name' => 'B.Tech M.Tech-Bachelor of Technology, Master of 
  Technology (BTech/MTech)','course_duration' => '5','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '519','course_name' => 
  'Integrated M.A.-Integrated Master of Arts','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '7'), array('id' => 
  '520','course_name' => 'Integrated M.B.A.-Integrated Master of Business 
  Administration','course_duration' => '5','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '521','course_name' => 
  'Integrated M.C.A.-Integrated Master of Computer 
  Applications','course_duration' => '5','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '522','course_name' => 
  'Integrated M.Sc.-Integrated Master of Science','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '7'), array('id' => 
  '523','course_name' => 'Integrated Ph.D-Integrated Doctor of 
  Philosophy','course_duration' => '5','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '524','course_name' => 'M.A. 
  B.Ed.-Master of Arts, Bachelor of Education (MA/BEd)','course_duration' => 
  '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '7'), array('id' => 
  '525','course_name' => 'M.Com. B.Ed.-Master of Commerce, Bachelor of 
  Education (MCom/BEd)','course_duration' => '4','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '7'), array('id' => '526','course_name' => 'M.Sc. 
  B.Ed.-Master of Science, Bachelor of Education (MSc/BEd)','course_duration' 
  => '4','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '7'), array('id' => 
  '527','course_name' => 'C.A.-Chartered Accountant','course_duration' => 
  '5','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '8'), array('id' => 
  '528','course_name' => 'C.F.A.-Chartered Financial 
  Analyst','course_duration' => '2','created_at' => '2020-06-11 
  12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '8'), array('id' => '529','course_name' => 
  'C.F.P.-Certified Financial Planner','course_duration' => '1','created_at' 
  => '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' 
  => NULL,'course_type_id' => '8'), array('id' => '530','course_name' => 
  'C.S.-Company Secretary','course_duration' => '3','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '8'), array('id' => '531','course_name' => 
  'F.R.M.-Financial Risk Management','course_duration' => '2','created_at' => 
  '2020-06-11 12:12:12','updated_at' => '2020-06-11 12:12:12','deleted_at' => 
  NULL,'course_type_id' => '8'), array('id' => '532','course_name' => 
  'P.M.P.-Project Management Professional','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '8'),array('id' => '533','course_name' => 
  'Cost Management Accounting ','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '8'),
  array('id' => '534','course_name' => 
  'B.E/B.Tech in Aerospace Engineering  ','course_duration' => 
  '3','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '4'),array('id' => '535','course_name' => 
  'M.Sc in Biotechnology','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'),
  array('id' => '536','course_name' => 
  'BMLT Bachelor of Medical Technology  ','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'),
  array('id' => '537','course_name' => 
  'P.B.B.Sc. Nursing ','course_duration' => 
  '2','created_at' => '2020-06-11 12:12:12','updated_at' => '2020-06-11 
  12:12:12','deleted_at' => NULL,'course_type_id' => '5'),
       ));
}
}
