<section class="ftco-section contact-section pt-4">
    <div class="container">
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="ftco-animate text-center">
                    <h1 class="mb-2">Atribut Penilaian Klasifikasi Pasien <br> Potensi Penyakit Jantung</h1>
                </div>
                <p class="text-left ml-2">Attribute Information :</p>
                <div class="p-4 bg-light">
                    <div class="row">
                        <div class="col-lg-6">
                            <dl class="row text-left">
                                <dt class="col-sm-2">Age</dt>
                                <dd class="col-sm-10">
                                    Usia,<br>
                                    rentang nilai: 41-50, 51-60, 61-70, 71-80
                                </dd>
                                <dt class="col-sm-2">Sex</dt>
                                <dd class="col-sm-10">
                                    Jenis Kelamin,<br>
                                    rentang nilai: L=1, P=0
                                </dd>
                                <dt class="col-sm-2">CP</dt>
                                <dd class="col-sm-10">Chest Pain Type,<br>
                                    tipe nyeri dada,<br>
                                    rentang nilai: <br>
                                    <ul class="list-unstyled ml-3">
                                        <li>(1) typical angina (1: angina),</li>
                                        <li>(2) atypical angina (2: abnang),</li>
                                        <li>(3) non-anginal pain (3: notang),</li>
                                        <li>(4) asymptomatic (4: asympt).</li>
                                    </ul>
                                </dd>
                                <dt class="col-sm-2">RBP</dt>
                                <dd class="col-sm-10">Resting Blood Pressure,<br>
                                    tekanan darah istirahat (tekanan darah pasien dalam mm Hg pada saat masuk rumah sakit),<br>
                                    rentang nilai: 90-110, 111-140, 141-160, 161-180
                                </dd>
                                <dt class="col-sm-2">SC</dt>
                                <dd class="col-sm-10">Serum Cholesterol in mg/dl,<br>
                                    serum kolesterol dalam mg/dl,<br>
                                    rentang nilai: 121-220, 221-320, 321-420, 421-520, 521-620
                                </dd>
                                <dt class="col-sm-2">FBS</dt>
                                <dd class="col-sm-10">Fasting Blood Sugar > 120 mg/dl,<br>
                                    gula darah puasa > 120 mg/dl, (Ukuran boolean yang menunjukkan apakah gula darah puasa lebih besar dari 120 mg/dl atau tidak),<br>
                                    rentang nilai: tidak=0, ya=1
                                </dd>
                                <dt class="col-sm-2">RER</dt>
                                <dd class="col-sm-10"> Resting Electrocardiographic Result,<br>
                                    Hasil elektrokardiografi(ECG) selama istirahat,<br>
                                    rentang nilai: <br>
                                    <ul class="list-unstyled ml-3">
                                        <li>(0) Normal,</li>
                                        <li>(1) AbNormal (kelainan gelombang ST-T),</li>
                                        <li>(2) Hipertrofi Ventrikel.</li>
                                    </ul>
                                </dd>
                                <dt class="col-sm-2">MHRA</dt>
                                <dd class="col-sm-10">Maximum Heart Rate Achieved,<br>
                                    denyut jantung maksimum tercapai,<br>
                                    rentang nilai: 95-115, 116-135, 136-155, 156-175, 176-195
                                </dd>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <dl class="row text-left">
                                <dt class="col-sm-2">EIA</dt>
                                <dd class="col-sm-10">Exercise Induced Angina, <br>
                                    latihan yang diinduksi angina (Ukuran boolean yang menunjukkan apakah latihan angina induksi telah terjadi),<br>
                                    rentang nilai: tidak=0, ya=1
                                </dd>
                                <dt class="col-sm-2 text-truncate">OldPeak</dt>
                                <dd class="col-sm-10">ST depression induced by exercise relative to rest,<br>
                                    Depresi ST disebabkan oleh olahraga relatif terhadap istirahat (segmen ST yang diperoleh dari latihan relatif terhadap istirahat),<br>
                                    rentang nilai: 0-1, 1, 1-2, 2, 2-3, 3, 3-4, 4, 1-5
                                </dd>
                                <dt class="col-sm-2">STS</dt>
                                <dd class="col-sm-10">the slope of the peak exercise ST segment,<br>
                                    kemiringan segmen ST latihan puncak (kemiringan segmen ST untuk latihan maksimum (puncak),<br>
                                    rentang nilai: <br>
                                    <ul class="list-unstyled ml-3">
                                        <li>(1) UpSloping,</li>
                                        <li>(2) Flat,</li>
                                        <li>(3) DownSloping.</li>
                                    </ul>
                                </dd>
                                <dt class="col-sm-2">NV</dt>
                                <dd class="col-sm-10">number of major vessels coloredby flourosopy,<br>
                                    jumlah vesel utama (0-3) diwarnai oleh flourosopy (jumlah vessel utama yang diwarnai oleh fluoroskopi),<br>
                                    rentang nilai: 0, 1, 2, 3
                                </dd>
                                <dt class="col-sm-2">T</dt>
                                <dd class="col-sm-10">Thal,<br>
                                    Status jantung,<br>
                                    rentang nilai: <br>
                                    <ul class="list-unstyled ml-3">
                                        <li>(3) Normal,</li>
                                        <li>(6) Fixed Defect (cacat tetap),</li>
                                        <li>(7) Reversable Defect (cacat yg dapat dibalikan).</li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <p class="text-left ml-2 mt-4">Attribute Types :</p>
                <div class="p-4 bg-light shadow-sm">
                    <div class="row">
                        <div class="col-lg-6">
                            <dl class="row text-left">
                                <dt class="col-sm-4">Real</dt>
                                <dd class="col-sm-8">1, 4, 5, 8, 10, 12</dd>
                                <dt class="col-sm-4">Ordered</dt>
                                <dd class="col-sm-8">11</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <dl class="row text-left">
                                <dt class="col-sm-4">Binary</dt>
                                <dd class="col-sm-8">2, 6, 9</dd>
                                <dt class="col-sm-4">Nominal</dt>
                                <dd class="col-sm-8">7, 3, 13</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <p class="text-left ml-2 mt-4">Variable to be predicated : <br> (ini outputnya, mengklasifikasikan pasien apakah kena penyakit jantung atau tidak)</p>
                <div class="p-4 bg-light shadow">
                    <div class="row">
                        <div class="col">
                            <dl class="row text-left">
                                <dt class="col-sm-12 mb-2">Absence (1) OR Presence (2) of heart desease</dt>
                                <dt class="col-sm-1">1</dt>
                                <dd class="col-sm-11">Ketiadaan Penyakit Jantung (sehat)</dd>
                                <dt class="col-sm-1">2</dt>
                                <dd class="col-sm-11">Kehadiran Penyakit Jantung (sakit)</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>