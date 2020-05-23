<section class="ftco-section contact-section pt-4">
    <div class="container">
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-8 mb-md-5">
                <div class="ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Klasifikasi</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url() ?>">Home <i class="ion-ios-arrow-forward ml-2"></i></a>
                        </span>
                        <span>Klasifikasi</span>
                    </p>
                </div>
                <form action="<?= base_url('classification/process') ?>" method="POST" class="bg-light p-5 contact-form">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 align-self-center col-form-label">Name</label>
                        <div class="col-sm-9 align-self-center">
                            <input type="text" name="name" min="0" class="form-control" id="name" placeholder="Your Name (nama)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-sm-3 align-self-center col-form-label">Age</label>
                        <div class="col-sm-9 align-self-center">
                            <input type="number" name="age" min="0" class="form-control" id="age" placeholder="Your Age (umur)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sex" class="col-sm-3 align-self-center col-form-label">Sex</label>
                        <div class="col-sm-9 align-self-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sex1" value="1" required>
                                <label class="form-check-label" for="sex1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sex0" value="0" required>
                                <label class="form-check-label" for="sex0">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="chestPain" class="col-sm-3 align-self-center col-form-label">Chest Pain Type</label>
                        <div class="col-sm-9 align-self-center">
                            <select name="chestPain" id="chestPain" class="form-control" required>
                                <option selected disabled>Chest Pain Type (tipe nyeri dada)</option>
                                <option value="1">Typical Angina (1: Angina)</option>
                                <option value="2">ATypical Angina (2: Abnang)</option>
                                <option value="3">Non-Anginal Pain (3: Notang)</option>
                                <option value="4">Asymptomatic (4: Asympt)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bloodPressure" class="col-sm-3 align-self-center col-form-label">Resting Blood Pressure</label>
                        <div class="col-sm-9 align-self-center">
                            <input type="number" name="bloodPressure" max="180" class="form-control" id="bloodPressure" placeholder="Resting Blood Pressure (tekanan darah)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serumCholestoral" class="col-sm-3 align-self-center col-form-label">Serum Cholestoral</label>
                        <div class="col-sm-9 align-self-center">
                            <input type="number" name="serumCholestoral" max="620" class="form-control" id="serumCholestoral" placeholder="Serum Cholestoral in mg/dl (kolesterol serum)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bloodSugar" class="col-sm-3 align-self-center col-form-label">Fasting Blood Sugar > 120 mg/dl</label>
                        <div class="col-sm-9 align-self-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodSugar" id="bloodSugar1" value="1" required>
                                <label class="form-check-label" for="bloodSugar1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodSugar" id="bloodSugar0" value="0" required>
                                <label class="form-check-label" for="bloodSugar0">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="electroCardioGraphic" class="col-sm-3 align-self-center col-form-label">Resting Electrocardiographic</label>
                        <div class="col-sm-9 align-self-center">
                            <select name="electroCardioGraphic" id="electroCardioGraphic" class="form-control" required>
                                <option selected disabled>Resting Electrocardiographic Results (elektrokardiografi)</option>
                                <option value="0">Normal</option>
                                <option value="1">Abnormal</option>
                                <option value="2">Hipertrofi Ventrikel</option>
                            </select>
                            <!-- <input type="number" name="electroCardioGraphic" min="0" max="2" class="form-control" id="electroCardioGraphic" placeholder="Resting Electrocardiographic Results (values 0,1,2) (elektrokardiografi)" required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="heartRate" class="col-sm-3 align-self-center col-form-label">Maximum Heart Rate</label>
                        <div class="col-sm-9 align-self-center">
                            <input type="number" name="heartRate" max="195" class="form-control" id="heartRate" placeholder="Maximum Heart Rate Achieved (detak jantung maksimum)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exercise" class="col-sm-3 align-self-center col-form-label">Exercise Induced Angina</label>
                        <div class="col-sm-9 align-self-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exercise" id="exercise1" value="1" required>
                                <label class="form-check-label" for="exercise1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exercise" id="exercise0" value="0" required>
                                <label class="form-check-label" for="exercise0">Tidak</label>
                            </div>
                            <!-- <input type="number" name="exercise" min="0" max="1" class="form-control" id="exercise" placeholder="Exercise Induced Angina (latihan yang diinduksi Angina)" required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="oldPeak" class="col-sm-3 align-self-center col-form-label">OldPeak</label>
                        <div class="col-sm-9 align-self-center">
                            <input type="number" name="oldPeak" max="5" class="form-control" id="oldPeak" placeholder="OldPeak (1-5) .." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stSegment" class="col-sm-3 align-self-center col-form-label">ST Segment</label>
                        <div class="col-sm-9 align-self-center">
                            <select name="stSegment" id="stSegment" class="form-control" required>
                                <option selected disabled>ST Segment (segmen ST)</option>
                                <option value="1">Upsloping</option>
                                <option value="2">Flat</option>
                                <option value="3">DownSloping</option>
                            </select>
                            <!-- <input type="number" name="stSegment" min="1" max="3" class="form-control" id="stSegment" placeholder="ST Segment (segmen ST)" required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="majorVessels" class="col-sm-3 align-self-center col-form-label">Major Vessels</label>
                        <div class="col-sm-9 align-self-center">
                            <input type="number" name="majorVessels" min="0" max="3" class="form-control" id="majorVessels" placeholder="Number of Major Vessels (0-3) (jumlah vesel utama)" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thal" class="col-sm-3 align-self-center col-form-label">Thal</label>
                        <div class="col-sm-9 align-self-center">
                            <select name="thal" id="thal" class="form-control" required>
                                <option selected disabled>Thal ..</option>
                                <option value="3">Normal</option>
                                <option value="6">Fixed Defect (cacat tetap)</option>
                                <option value="7">Reversable Defect (cacat yg dapat dibalikan)</option>
                            </select>
                            <!-- <input type="number" name="thal" min="3" max="7" class="form-control" id="thal" placeholder="Thal .." required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button type="reset" onclick="return(confirm('Anda yakin ingin reset semua data?'))" class="btn btn-secondary py-3 px-5">Reset</button>
                            <button type="submit" class="btn btn-primary py-3 px-5">Proses</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>