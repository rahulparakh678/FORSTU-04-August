<?php

use Illuminate\Database\Seeder;
use App\StudentCourses;

class Studentcourseseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         $courses = [
            [
                'id'             	=> 1,
                'course_name'       => 'Class 1',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 2,
                'course_name'       => 'Class 2',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 3,
                'course_name'       => 'Class 3',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 4,
                'course_name'       => 'Class 4',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 5,
                'course_name'       => 'Class 5',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 6,
                'course_name'       => 'Class 6',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 7,
                'course_name'       => 'Class 7',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 8,
                'course_name'       => 'Class 1',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 9,
                'course_name'       => 'Class 9',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
             [
                'id'             	=> 10,
                'course_name'       => 'Class 10',
                'course_duration'   => '1',
                'course_type_id'    => 1,
                
            ],
            [
                'id'                => 11,
                'course_name'       => 'Class 11',
                'course_duration'   => '1',
                'course_type_id'    => 2,
                
            ],
            [
                'id'                => 12,
                'course_name'       => 'Class 12',
                'course_duration'   => '1',
                'course_type_id'    => 2,
                
            ],

             
            [
                'id'             	=> 19,
                'course_name'       => 'Diploma-Diploma',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 20,
                'course_name'       => 'D.Ed.-Diploma in Education (DEd)',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 21,
                'course_name'       => 'A.N.M.-Auxiliary Nurse & Midwife (ANM)',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 22,
                'course_name'       => 'Diploma in Acting & Drama',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 23,
                'course_name'       => 'Diploma in advertising and commercial management',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 24,
                'course_name'       => 'Diploma in Design',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 25,
                'course_name'       => 'Diploma in Event Management',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 26,
                'course_name'       => 'Diploma in Fashion Design',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
             [
                'id'             	=> 27,
                'course_name'       => 'Diploma in Film Editing/Film Making',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 28,
                'course_name'       => 'Diploma in Interior Designing',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 29,
                'course_name'       => 'D.Pharma-Diploma in Pharmacy(DPharma)',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 30,
                'course_name'       => 'D.Voc.-Diploma in Vocational Education (DVoc)',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 31,
                'course_name'       => 'G.N.M.-General Nursing & Midwifery (GNM)',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 32,
                'course_name'       => 'DIPLOMA IN MEDICAL LABORATORY TECHNOLOGY [DMLT]',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            
             [
                'id'             	=> 33,
                'course_name'       => 'DIPLOMA IN PHYSIOTHERAPY [DPT]',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            
            [
                'id'             	=> 34,
                'course_name'       => 'DIPLOMA IN JOURNALISM AND MASS COMMUNICATION',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 35,
                'course_name'       => 'Other',
                'course_duration'   => '1',
                'course_type_id'    => 3,
                
            ],
            [
                'id'             	=> 36,
                'course_name'       => 'B.A.-Bachelor of Arts (BA)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 37,
                'course_name'       => 'Bachelor of Arts in Foreign Languages',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 38,
                'course_name'       => 'Bachelor of Planning and Design',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 39,
                'course_name'       => 'B.Agri.-Bachelor of Agriculture (BAgri)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 40,
                'course_name'       => 'B.A.(Hons)-Bachelor of Arts (Honors) (BA Honors)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 41,
                'course_name'       => 'B.A.M.-Bachelor of Ayurved Medicine (BAM)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 42,
                'course_name'       => 'B.A.M.S.-Bachelor of Ayurved Medicine & Surgery (BAMS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 43,
                'course_name'       => 'B.Architecture-Bachelor of Architecture (BArchitecture)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 44,
                'course_name'       => 'B.B.A.-Bachelor of Business Administration (BBA)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 45,
                'course_name'       => 'B.B.M.-Bachelor of Business Management (BBM)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 46,
                'course_name'       => 'B.B.S.-Bachelor of Business Studies (BBS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 47,
                'course_name'       => 'B.C.A.-Bachelor of Computer Applications (BCA)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 48,
                'course_name'       => 'B.C.E.-Bachelor of Civil Engineering (BCE)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 49,
                'course_name'       => 'B.Ch.E.-Bachelor of Chemical Engineering (BChE)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 50,
                'course_name'       => 'B.Chem.Tech.-Bachelor of Chemical Technology (BChemTech)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 51,
                'course_name'       => 'B.Com.-Bachelor of Commerce (BCom)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 52,
                'course_name'       => 'B.Dance-Bachelor of Dance (BDance)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 53,
                'course_name'       => 'B.Des.-Bachelor of Design (BDes)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 54,
                'course_name'       => 'B.D.S.-Bachelor of Dental Surgery (BDS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 55,
                'course_name'       => 'B.Ed.-Bachelor of Education (BEd)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'                => 56,
                'course_name'       => 'B.E/B.Tech Bachelor of Engineering/Technology',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 57,
                'course_name'       => 'B.F.A.-Bachelor of Fine Arts (BFA)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 58,
                'course_name'       => 'B.F.Sc.-Bachelor of Fisheries Science (BFSc)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 59,
                'course_name'       => 'B.F.Tech.-Bachelor of Fashion Technology (BFTech)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 60,
                'course_name'       => 'B.H.M.-Bachelor of Hotel Management (BHM)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 61,
                'course_name'       => 'B.H.M.C.T.-Bachelor of Hotel Management and Catering Technology (BHMCT)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 62,
                'course_name'       => 'B.H.M.S.-Bachelor of Homeopathic Medicine and Surgery (BHMS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 63,
                'course_name'       => 'B.H.M.T.T.-Bachelor of Hotel Management, Travel and Tourism (BHMTT)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 64,
                'course_name'       => 'B.J.-Bachelor of Journalism (BJ)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 65,
                'course_name'       => 'B.J.M.C.-Bachelor of Journalism and Mass Communication (BJMC)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 66,
                'course_name'       => 'B.Lib.I.Sc.-Bachelor of Library & Information Science (BLibISc)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 67,
                'course_name'       => 'B.M.S.-Bachelor of Management Studies (BMS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 68,
                'course_name'       => 'B.Mus.-Bachelor of Music (BMus)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 69,
                'course_name'       => 'B.Optom.-Bachelor of Clinical Optometry (BOptom)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 70,
                'course_name'       => 'B.O.T.-Bachelor of Occupational Therapy (BOT)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 71,
                'course_name'       => 'B.P.A.-Bachelor of Performing Arts (BPA)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 72,
                'course_name'       => 'B.Pharm.(Ayu.) -Bachelor of Ayurved in Pharmacy (BPharm Ayurved)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 73,
                'course_name'       => 'B.Pharm.(Ayu.) -Bachelor of Ayurved in Pharmacy (BPharm Ayurved)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 74,
                'course_name'       => 'B.Pharm.-Bachelor of Pharmacy (BPharm)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 75,
                'course_name'       => 'B.Plan.-Bachelor of Planning (BPlan)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 76,
                'course_name'       => 'B.P.T.-Bachelor of Physiotherapy (BPT)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 77,
                'course_name'       => 'B.Sc.Agriculture.-Bachelor of Agriculture (BScAgri)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 78,
                'course_name'       => 'B.Sc.-Bachelor of Science (BSc)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 79,
                'course_name'       => 'B.Sc.(Hons)-Bachelor of Science (Honors) (BSc Honors)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 80,
                'course_name'       => 'B.Sc in Environmental Science',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 81,
                'course_name'       => 'B.Sc. (IT) Bachelor of Science in Information Technology (BSc IT)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 82,
                'course_name'       => 'B.Sc. (CS) Bachelor of Science in Computer Science (BSc CS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 83,
                'course_name'       => 'B.Sc.(Nursing)-Bachelor of Science in Nursing (BSc Nursing)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 84,
                'course_name'       => 'B.Sc.(Sericulture)-Bachelor of Science in Sericulture (Bsc)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 85,
                'course_name'       => 'B.S.W.-Bachelor of Social Work (BSW)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 86,
                'course_name'       => 'B.Tech in dairy technology',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 87,
                'course_name'       => 'B.U.M.S.-Bachelor of Unani Medicine and Surgery (BUMS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 88,
                'course_name'       => 'B.Voc.-Bachelor of Vocational Education (BVoc)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 89,
                'course_name'       => 'B.V.Sc.&A.H.-Bachelor of Veterinary Science & Animal Husbandry (BVSc&AH)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 90,
                'course_name'       => 'B.V.Sc.-Bachelor of Veterinary Science (BVSc)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 91,
                'course_name'       => 'L.L.B.-Bachelor of Law or Laws (LLB)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            [
                'id'             	=> 92,
                'course_name'       => 'M.B.B.S.-Bachelor of Medicine and Bachelor of Surgery (MBBS)',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
             [
                'id'             	=> 93,
                'course_name'       => 'L.L.M.-Master of Law or Laws (LLM)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 94,
                'course_name'       => 'M.A.-Master of Arts (MA)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 95,
                'course_name'       => 'M.A.M.S.-Master of Ayurved in Medicine and Surgery (MAMS)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 96,
                'course_name'       => 'M.Arch.-Master of Architecture (MArch)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 97,
                'course_name'       => 'M.C.A. -Master of Computer Applications (MCA)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 98,
                'course_name'       => 'M.B.A.- Master of Business Administration (MBA)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 99,
                'course_name'       => 'M.Com.-Master of Commerce (MCom)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 100,
                'course_name'       => 'M.D.-Doctor of Medicine (MD)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 101,
                'course_name'       => 'M.Des.-Master of Design (MDes)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 102,
                'course_name'       => 'M.D.S.-Master of Dental Surgery (MDS)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 103,
                'course_name'       => 'M.Ed. -Master of Education (MEd)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 104,
                'course_name'       => 'M.E./ M.Tech -Master of Engineering/Technology (ME)/(MTech)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 105,
                'course_name'       => 'M.F.A. -Master of Fine Arts (MFA)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 106,
                'course_name'       => 'M.F.M.-Master of Fashion Management (MFM)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 107,
                'course_name'       => 'M.F.Tech.-Master of Fashion Technology (MFTech)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 108,
                'course_name'       => 'M.H.M.S.-Master of Homeopathic Medicine and Science (MHMS)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 109,
                'course_name'       => 'M.J.-Master of Journalism (MJ)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 110,
                'course_name'       => 'M.J.M.C.-Master of Journalism and Mass Communication (MJMC)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 111,
                'course_name'       => 'M.Lib.Sc. -Master of Library Science (MLibSc)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 112,
                'course_name'       => 'M.M.S.-Master of Management Studies',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 113,
                'course_name'       => 'M.Optom. -Master of Optometry (MOptom)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 114,
                'course_name'       => 'M.O.T. -Master of Occupational Therapy (MOT)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 115,
                'course_name'       => 'M.P.T.-Master of Physiotherapy (MPT)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 116,
                'course_name'       => 'M.Sc in Biotechnology',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 117,
                'course_name'       => 'M.Sc.-Master of Science (MSc)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 118,
                'course_name'       => 'M.Sc.(Medical Microbiology)-Master of Science in Medical Microbiology (MSc Medical Microbiology)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 119,
                'course_name'       => 'M.Sc. Nursing-Master of Science in Nursing (MSc Nursing)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 120,
                'course_name'       => 'M.S.-Master of Surgery (MS)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 121,
                'course_name'       => 'M.S.W.-Master of Social Work (MSW)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 122,
                'course_name'       => 'M.Stat. -Master of Statistics (MStat)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
             [
                'id'             	=> 123,
                'course_name'       => 'PG Diploma-Post Graduate Diploma',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
             [
                'id'             	=> 124,
                'course_name'       => 'P.G.D.M.-Post-Graduate Diploma in Management (PGDM)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 125,
                'course_name'       => 'Pharm.D.-Doctor of Pharmacy',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'             	=> 126,
                'course_name'       => 'ITI',
                'course_duration'   => '1',
                'course_type_id'    => 6,
                
            ],
            [
                'id'             	=> 127,
                'course_name'       => 'CA Chartered Accountant',
                'course_duration'   => '1',
                'course_type_id'    => 8,
                
            ],
             [
                'id'             	=> 128,
                'course_name'       => 'CS Company Secretary',
                'course_duration'   => '1',
                'course_type_id'    => 8,
                
            ],
            [
                'id'             	=> 129,
                'course_name'       => 'MPSC/UPSC',
                'course_duration'   => '1',
                'course_type_id'    => 8,
                
            ],
            [
                'id'                => 130,
                'course_name'       => 'M.Pharm. -Master of Pharmacy (MPharm) ',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'                => 131,
                'course_name'       => 'M.Sc in Biotechnology ',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'                => 132,
                'course_name'       => 'B.M.L.T Bachelor of Medical Technology',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'                => 133,
                'course_name'       => '(M.A) Master of arts in economics (M.A)',
                'course_duration'   => '1',
                'course_type_id'    => 5,
                
            ],
            [
                'id'                => 134,
                'course_name'       => 'P.B.B.Sc. Nursing',
                'course_duration'   => '1',
                'course_type_id'    => 4,
                
            ],
            
            

              




        ];

        StudentCourses::insert($courses);
    }
}
