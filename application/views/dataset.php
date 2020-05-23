<section class="ftco-section contact-section pt-4">
    <div class="container">
        <div class="row block-9 justify-content-center mb-3">
            <div class="col-sm-12">
                <div class="ftco-animate text-center">
                    <h1 class="mb-2 bread">Dataset</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="<?= base_url() ?>">Home <i class="ion-ios-arrow-forward ml-2"></i></a>
                        </span>
                        <span>Dataset</span>
                    </p>
                </div>
                <p class="text-left ml-2">Attribute Information :</p>
                <div class="px-4 bg-light shadow-sm">
                    <div class="row">
                        <div class="col-lg-6">
                            <dl class="my-1 row text-left">
                                <dt class="col-sm-2 my-0">Age</dt>
                                <dd class="col-sm-10 my-0">Age (Umur)</dd>
                                <dt class="col-sm-2 my-0">Sex</dt>
                                <dd class="col-sm-10 my-0">Sex (Jenis Kelamin)</dd>
                                <dt class="col-sm-2 my-0">CP</dt>
                                <dd class="col-sm-10 my-0">Chest pain type (4 values)</dd>
                                <dt class="col-sm-2 my-0">RBP</dt>
                                <dd class="col-sm-10 my-0">Resting blood pressure</dd>
                                <dt class="col-sm-2 my-0">SC</dt>
                                <dd class="col-sm-10 my-0">Serum cholestoral in mg/dl</dd>
                                <dt class="col-sm-2 my-0">FBS</dt>
                                <dd class="col-sm-10 my-0">Fasting blood sugar > 120 mg/dl</dd>
                                <dt class="col-sm-2 my-0">RER</dt>
                                <dd class="col-sm-10 my-0">Resting electrocardiographic results (values 0,1,2)</dd>
                                <dt class="col-sm-2 my-0">MHRA</dt>
                                <dd class="col-sm-10 my-0">Maximum heart rate achieved</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <dl class="row text-left">
                                <dt class="col-sm-2 my-0">EIA</dt>
                                <dd class="col-sm-10 my-0">Exercise induced angina</dd>
                                <dt class="col-sm-2 my-0 text-truncate">OldPeak</dt>
                                <dd class="col-sm-10 my-0">Oldpeak = ST depression induced by exercise relative to rest</dd>
                                <dt class="col-sm-2 my-0">STS</dt>
                                <dd class="col-sm-10 my-0">The slope of the peak exercise ST segment</dd>
                                <dt class="col-sm-2 my-0">NV</dt>
                                <dd class="col-sm-10 my-0">Number of major vessels (0-3) colored by flourosopy</dd>
                                <dt class="col-sm-2 my-0">T</dt>
                                <dd class="col-sm-10 my-0">Thal: 3 = normal; 6 = fixed defect; 7 = reversable defect</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive-lg">
            <table class="table table-striped table-hover text-center my-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Age</th>
                        <th scope="col">Sex</th>
                        <th scope="col">CP</th>
                        <th scope="col">RBP</th>
                        <th scope="col">SC</th>
                        <th scope="col">FBS</th>
                        <th scope="col">RER</th>
                        <th scope="col">MHRA</th>
                        <th scope="col">EIA</th>
                        <th scope="col">OldPeak</th>
                        <th scope="col">STS</th>
                        <th scope="col">NV</th>
                        <th scope="col">T</th>
                        <th scope="col">Heart Desease</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($this->db->get('tb_statlog')->result_array() as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $data['Age'] ?></td>
                            <td><?= $data['Sex'] ?></td>
                            <td><?= $data['CPT'] ?></td>
                            <td><?= $data['RBP'] ?></td>
                            <td><?= $data['SC'] ?></td>
                            <td><?= $data['FBS'] ?></td>
                            <td><?= $data['RER'] ?></td>
                            <td><?= $data['MHRA'] ?></td>
                            <td><?= $data['EIA'] ?></td>
                            <td><?= $data['Oldpeak'] ?></td>
                            <td><?= $data['TSofTPESTS'] ?></td>
                            <td><?= $data['NoMV'] ?></td>
                            <td><?= $data['Thal'] ?></td>
                            <td><?= $data['Label'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>