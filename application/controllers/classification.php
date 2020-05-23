<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classification extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('classification_model');
    }

    public function loadView($file, $data)
    {
        $this->load->view('parts/header', $data);
        $this->load->view($file, $data);
        $this->load->view('parts/footer', $data);
    }

    public function index()
    {
        $data['title'] = 'Klasifikasi';
        $this->loadView('classification', $data);
    }

    public function process()
    {
        $Name = $this->input->post('name');
        $Age = $this->input->post('age');
        $Sex = $this->input->post('sex');
        $CPT = $this->input->post('chestPain');
        $RBP = $this->input->post('bloodPressure');
        $SC = $this->input->post('serumCholestoral');
        $FBS = $this->input->post('bloodSugar');
        $RER = $this->input->post('electroCardioGraphic');
        $MHRA = $this->input->post('heartRate');
        $EIA = $this->input->post('exercise');
        $OldPeak = $this->input->post('oldPeak');
        $TSoftPESTS = $this->input->post('stSegment');
        $NoMV = $this->input->post('majorVessels');
        $Thal = $this->input->post('thal');

        $data = [
            'Name'          => $Name,
            'Age'           => $Age,
            'Sex'           => $Sex,
            'CPT'           => $CPT,
            'RBP'           => $RBP,
            'SC'            => $SC,
            'FBS'           => $FBS,
            'RER'           => $RER,
            'MHRA'          => $MHRA,
            'EIA'           => $EIA,
            'OldPeak'       => $OldPeak,
            'TSoftPESTS'    => $TSoftPESTS,
            'NoMV'          => $NoMV,
            'Thal'          => $Thal
        ];

        // var_dump($data);
        $this->db->insert('tb_input', $data);

        $data['title'] = 'Hasil';
        $this->loadView('result', $data);
    }

    public function result()
    {
        $data['title'] = 'Hasil';
        $this->loadView('result', $data);
    }
}

/* End of file Classification.php */
