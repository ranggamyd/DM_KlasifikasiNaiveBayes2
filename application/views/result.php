<?php
$databaseHost = 'localhost';
$databaseName = 'db_statlog';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$jumlahdata = mysqli_query($mysqli, "SELECT COUNT(ID) as JUMLAH FROM `tb_statlog`");
$jumlahdata_ = mysqli_fetch_array($jumlahdata);

$jumlahdatalabel1 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Label = 1");
$jumlahdatalabel1_ = mysqli_fetch_array($jumlahdatalabel1);
$jumlahdatalabel2 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Label = 2");
$jumlahdatalabel2_ = mysqli_fetch_array($jumlahdatalabel2);

$jumlahdataAge11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age <= 40 AND Label = 1");
$jumlahdataAge11_ = mysqli_fetch_array($jumlahdataAge11);
$jumlahdataAge12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age <= 40 AND Label = 2");
$jumlahdataAge12_ = mysqli_fetch_array($jumlahdataAge12);
$jumlahdataAge21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 41 AND Age <= 50) AND Label = 1");
$jumlahdataAge21_ = mysqli_fetch_array($jumlahdataAge21);
$jumlahdataAge22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 41 AND Age <= 50) AND Label = 2");
$jumlahdataAge22_ = mysqli_fetch_array($jumlahdataAge22);
$jumlahdataAge31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 51 AND Age <= 60) AND Label = 1");
$jumlahdataAge31_ = mysqli_fetch_array($jumlahdataAge31);
$jumlahdataAge32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 51 AND Age <= 60) AND Label = 2");
$jumlahdataAge32_ = mysqli_fetch_array($jumlahdataAge32);
$jumlahdataAge41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 61 AND Age <= 70) AND Label = 1");
$jumlahdataAge41_ = mysqli_fetch_array($jumlahdataAge41);
$jumlahdataAge42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 61 AND Age <= 70) AND Label = 2");
$jumlahdataAge42_ = mysqli_fetch_array($jumlahdataAge42);
$jumlahdataAge51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age >= 71 AND Label = 1");
$jumlahdataAge51_ = mysqli_fetch_array($jumlahdataAge51);
$jumlahdataAge52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age >= 71 AND Label = 2");
$jumlahdataAge52_ = mysqli_fetch_array($jumlahdataAge52);

$jumlahdataSex01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 0 AND Label = 1");
$jumlahdataSex01_ = mysqli_fetch_array($jumlahdataSex01);
$jumlahdataSex02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 0 AND Label = 2");
$jumlahdataSex02_ = mysqli_fetch_array($jumlahdataSex02);
$jumlahdataSex11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 1 AND Label = 1");
$jumlahdataSex11_ = mysqli_fetch_array($jumlahdataSex11);
$jumlahdataSex12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 1 AND Label = 2");
$jumlahdataSex12_ = mysqli_fetch_array($jumlahdataSex12);

$jumlahdataCPT11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 1 AND Label = 1");
$jumlahdataCPT11_ = mysqli_fetch_array($jumlahdataCPT11);
$jumlahdataCPT12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 1 AND Label = 2");
$jumlahdataCPT12_ = mysqli_fetch_array($jumlahdataCPT12);
$jumlahdataCPT21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 2 AND Label = 1");
$jumlahdataCPT21_ = mysqli_fetch_array($jumlahdataCPT21);
$jumlahdataCPT22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 2 AND Label = 2");
$jumlahdataCPT22_ = mysqli_fetch_array($jumlahdataCPT22);
$jumlahdataCPT31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 3 AND Label = 1");
$jumlahdataCPT31_ = mysqli_fetch_array($jumlahdataCPT31);
$jumlahdataCPT32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 3 AND Label = 2");
$jumlahdataCPT32_ = mysqli_fetch_array($jumlahdataCPT32);
$jumlahdataCPT41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 4 AND Label = 1");
$jumlahdataCPT41_ = mysqli_fetch_array($jumlahdataCPT41);
$jumlahdataCPT42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 4 AND Label = 2");
$jumlahdataCPT42_ = mysqli_fetch_array($jumlahdataCPT42);

$jumlahdataRBP11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP <= 110 AND Label = 1");
$jumlahdataRBP11_ = mysqli_fetch_array($jumlahdataRBP11);
$jumlahdataRBP12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP <= 110 AND Label = 2");
$jumlahdataRBP12_ = mysqli_fetch_array($jumlahdataRBP12);
$jumlahdataRBP21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 111 AND RBP <= 140) AND Label = 1");
$jumlahdataRBP21_ = mysqli_fetch_array($jumlahdataRBP21);
$jumlahdataRBP22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 111 AND RBP <= 140) AND Label = 2");
$jumlahdataRBP22_ = mysqli_fetch_array($jumlahdataRBP22);
$jumlahdataRBP31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 141 AND RBP <= 160) AND Label = 1");
$jumlahdataRBP31_ = mysqli_fetch_array($jumlahdataRBP31);
$jumlahdataRBP32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 141 AND RBP <= 160) AND Label = 2");
$jumlahdataRBP32_ = mysqli_fetch_array($jumlahdataRBP32);
$jumlahdataRBP41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP >= 161 AND Label = 1");
$jumlahdataRBP41_ = mysqli_fetch_array($jumlahdataRBP41);
$jumlahdataRBP42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP >= 161 AND Label = 2");
$jumlahdataRBP42_ = mysqli_fetch_array($jumlahdataRBP42);

$jumlahdataSC11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC <= 220 AND Label = 1");
$jumlahdataSC11_ = mysqli_fetch_array($jumlahdataSC11);
$jumlahdataSC12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC <= 220 AND Label = 2");
$jumlahdataSC12_ = mysqli_fetch_array($jumlahdataSC12);
$jumlahdataSC21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 221 AND SC <= 320) AND Label = 1");
$jumlahdataSC21_ = mysqli_fetch_array($jumlahdataSC21);
$jumlahdataSC22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 221 AND SC <= 320) AND Label = 2");
$jumlahdataSC22_ = mysqli_fetch_array($jumlahdataSC22);
$jumlahdataSC31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 321 AND SC <= 420) AND Label = 1");
$jumlahdataSC31_ = mysqli_fetch_array($jumlahdataSC31);
$jumlahdataSC32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 321 AND SC <= 420) AND Label = 2");
$jumlahdataSC32_ = mysqli_fetch_array($jumlahdataSC32);
$jumlahdataSC41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 421 AND SC <= 520) AND Label = 1");
$jumlahdataSC41_ = mysqli_fetch_array($jumlahdataSC41);
$jumlahdataSC42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 421 AND SC <= 520) AND Label = 2");
$jumlahdataSC42_ = mysqli_fetch_array($jumlahdataSC42);
$jumlahdataSC51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC >= 521 AND Label = 1");
$jumlahdataSC51_ = mysqli_fetch_array($jumlahdataSC51);
$jumlahdataSC52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC >= 521 AND Label = 2");
$jumlahdataSC52_ = mysqli_fetch_array($jumlahdataSC52);

$jumlahdataFBS01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 0 AND Label = 1");
$jumlahdataFBS01_ = mysqli_fetch_array($jumlahdataFBS01);
$jumlahdataFBS02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 0 AND Label = 2");
$jumlahdataFBS02_ = mysqli_fetch_array($jumlahdataFBS02);
$jumlahdataFBS11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 1 AND Label = 1");
$jumlahdataFBS11_ = mysqli_fetch_array($jumlahdataFBS11);
$jumlahdataFBS12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 1 AND Label = 2");
$jumlahdataFBS12_ = mysqli_fetch_array($jumlahdataFBS12);

$jumlahdataRER01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 0 AND Label = 1");
$jumlahdataRER01_ = mysqli_fetch_array($jumlahdataRER01);
$jumlahdataRER02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 0 AND Label = 2");
$jumlahdataRER02_ = mysqli_fetch_array($jumlahdataRER02);
$jumlahdataRER11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 1 AND Label = 1");
$jumlahdataRER11_ = mysqli_fetch_array($jumlahdataRER11);
$jumlahdataRER12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 1 AND Label = 2");
$jumlahdataRER12_ = mysqli_fetch_array($jumlahdataRER12);
$jumlahdataRER21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 2 AND Label = 1");
$jumlahdataRER21_ = mysqli_fetch_array($jumlahdataRER21);
$jumlahdataRER22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 2 AND Label = 2");
$jumlahdataRER22_ = mysqli_fetch_array($jumlahdataRER22);

$jumlahdataMHRA11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA <= 115 AND Label = 1");
$jumlahdataMHRA11_ = mysqli_fetch_array($jumlahdataMHRA11);
$jumlahdataMHRA12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA <= 115 AND Label = 2");
$jumlahdataMHRA12_ = mysqli_fetch_array($jumlahdataMHRA12);
$jumlahdataMHRA21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 116 AND MHRA <= 135) AND Label = 1");
$jumlahdataMHRA21_ = mysqli_fetch_array($jumlahdataMHRA21);
$jumlahdataMHRA22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 116 AND MHRA <= 135) AND Label = 2");
$jumlahdataMHRA22_ = mysqli_fetch_array($jumlahdataMHRA22);
$jumlahdataMHRA31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 136 AND MHRA <= 155) AND Label = 1");
$jumlahdataMHRA31_ = mysqli_fetch_array($jumlahdataMHRA31);
$jumlahdataMHRA32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 136 AND MHRA <= 155) AND Label = 2");
$jumlahdataMHRA32_ = mysqli_fetch_array($jumlahdataMHRA32);
$jumlahdataMHRA41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 156 AND MHRA <= 175) AND Label = 1");
$jumlahdataMHRA41_ = mysqli_fetch_array($jumlahdataMHRA41);
$jumlahdataMHRA42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 156 AND MHRA <= 175) AND Label = 2");
$jumlahdataMHRA42_ = mysqli_fetch_array($jumlahdataMHRA42);
$jumlahdataMHRA51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA >= 176 AND Label = 1");
$jumlahdataMHRA51_ = mysqli_fetch_array($jumlahdataMHRA51);
$jumlahdataMHRA52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA >= 176 AND Label = 2");
$jumlahdataMHRA52_ = mysqli_fetch_array($jumlahdataMHRA52);

$jumlahdataEIA01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 0 AND Label = 1");
$jumlahdataEIA01_ = mysqli_fetch_array($jumlahdataEIA01);
$jumlahdataEIA02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 0 AND Label = 2");
$jumlahdataEIA02_ = mysqli_fetch_array($jumlahdataEIA02);
$jumlahdataEIA11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 1 AND Label = 1");
$jumlahdataEIA11_ = mysqli_fetch_array($jumlahdataEIA11);
$jumlahdataEIA12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 1 AND Label = 2");
$jumlahdataEIA12_ = mysqli_fetch_array($jumlahdataEIA12);

$jumlahdataOldPeak11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE OldPeak <= 1 AND Label = 1");
$jumlahdataOldPeak11_ = mysqli_fetch_array($jumlahdataOldPeak11);
$jumlahdataOldPeak12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE OldPeak <= 1 AND Label = 2");
$jumlahdataOldPeak12_ = mysqli_fetch_array($jumlahdataOldPeak12);
$jumlahdataOldPeak21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (OldPeak >= 1.1 AND OldPeak <= 2) AND Label = 1");
$jumlahdataOldPeak21_ = mysqli_fetch_array($jumlahdataOldPeak21);
$jumlahdataOldPeak22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (OldPeak >= 1.1 AND OldPeak <= 2) AND Label = 2");
$jumlahdataOldPeak22_ = mysqli_fetch_array($jumlahdataOldPeak22);
$jumlahdataOldPeak31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (OldPeak >= 2.2 AND OldPeak <= 3) AND Label = 1");
$jumlahdataOldPeak31_ = mysqli_fetch_array($jumlahdataOldPeak31);
$jumlahdataOldPeak32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (OldPeak >= 2.2 AND OldPeak <= 3) AND Label = 2");
$jumlahdataOldPeak32_ = mysqli_fetch_array($jumlahdataOldPeak32);
$jumlahdataOldPeak41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (OldPeak >= 3.3 AND OldPeak <= 4) AND Label = 1");
$jumlahdataOldPeak41_ = mysqli_fetch_array($jumlahdataOldPeak41);
$jumlahdataOldPeak42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (OldPeak >= 3.3 AND OldPeak <= 4) AND Label = 2");
$jumlahdataOldPeak42_ = mysqli_fetch_array($jumlahdataOldPeak42);
$jumlahdataOldPeak51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE OldPeak >= 4.1 AND Label = 1");
$jumlahdataOldPeak51_ = mysqli_fetch_array($jumlahdataOldPeak51);
$jumlahdataOldPeak52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE OldPeak >= 4.1 AND Label = 2");
$jumlahdataOldPeak52_ = mysqli_fetch_array($jumlahdataOldPeak52);

$jumlahdatats11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSoftPESTS = 1 AND Label = 1");
$jumlahdatats11_ = mysqli_fetch_array($jumlahdatats11);
$jumlahdatats12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSoftPESTS = 1 AND Label = 2");
$jumlahdatats12_ = mysqli_fetch_array($jumlahdatats12);
$jumlahdatats21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSoftPESTS = 2 AND Label = 1");
$jumlahdatats21_ = mysqli_fetch_array($jumlahdatats21);
$jumlahdatats22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSoftPESTS = 2 AND Label = 2");
$jumlahdatats22_ = mysqli_fetch_array($jumlahdatats22);
$jumlahdatats31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSoftPESTS = 3 AND Label = 1");
$jumlahdatats31_ = mysqli_fetch_array($jumlahdatats31);
$jumlahdatats32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSoftPESTS = 3 AND Label = 2");
$jumlahdatats32_ = mysqli_fetch_array($jumlahdatats32);

$jumlahdataNoMV01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 0 AND Label = 1");
$jumlahdataNoMV01_ = mysqli_fetch_array($jumlahdataNoMV01);
$jumlahdataNoMV02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 0 AND Label = 2");
$jumlahdataNoMV02_ = mysqli_fetch_array($jumlahdataNoMV02);
$jumlahdataNoMV11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 1 AND Label = 1");
$jumlahdataNoMV11_ = mysqli_fetch_array($jumlahdataNoMV11);
$jumlahdataNoMV12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 1 AND Label = 2");
$jumlahdataNoMV12_ = mysqli_fetch_array($jumlahdataNoMV12);
$jumlahdataNoMV21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 2 AND Label = 1");
$jumlahdataNoMV21_ = mysqli_fetch_array($jumlahdataNoMV21);
$jumlahdataNoMV22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 2 AND Label = 2");
$jumlahdataNoMV22_ = mysqli_fetch_array($jumlahdataNoMV22);
$jumlahdataNoMV31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 3 AND Label = 1");
$jumlahdataNoMV31_ = mysqli_fetch_array($jumlahdataNoMV31);
$jumlahdataNoMV32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 3 AND Label = 2");
$jumlahdataNoMV32_ = mysqli_fetch_array($jumlahdataNoMV32);

$jumlahdataThal11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 3 AND Label = 1");
$jumlahdataThal11_ = mysqli_fetch_array($jumlahdataThal11);
$jumlahdataThal12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 3 AND Label = 2");
$jumlahdataThal12_ = mysqli_fetch_array($jumlahdataThal12);
$jumlahdataThal21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 6 AND Label = 1");
$jumlahdataThal21_ = mysqli_fetch_array($jumlahdataThal21);
$jumlahdataThal22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 6 AND Label = 2");
$jumlahdataThal22_ = mysqli_fetch_array($jumlahdataThal22);
$jumlahdataThal31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 7 AND Label = 1");
$jumlahdataThal31_ = mysqli_fetch_array($jumlahdataThal31);
$jumlahdataThal32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 7 AND Label = 2");
$jumlahdataThal32_ = mysqli_fetch_array($jumlahdataThal32);

$jumlahdata_["JUMLAH"];
$jumlahdatalabel1_["JUMLAH"];
$jumlahdatalabel2_["JUMLAH"];

$Age11 = $jumlahdataAge11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Age12 = $jumlahdataAge12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$Age21 = $jumlahdataAge21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Age22 = $jumlahdataAge22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$Age31 = $jumlahdataAge31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Age32 = $jumlahdataAge32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$Age41 = $jumlahdataAge41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Age42 = $jumlahdataAge42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$Age51 = $jumlahdataAge51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Age52 = $jumlahdataAge52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$Sex01 = $jumlahdataSex01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Sex02 = $jumlahdataSex02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$Sex11 = $jumlahdataSex11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Sex12 = $jumlahdataSex12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$CPT11 = $jumlahdataCPT11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$CPT12 = $jumlahdataCPT12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$CPT21 = $jumlahdataCPT21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$CPT22 = $jumlahdataCPT22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$CPT31 = $jumlahdataCPT31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$CPT32 = $jumlahdataCPT32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$CPT41 = $jumlahdataCPT41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$CPT42 = $jumlahdataCPT42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$RBP11 = $jumlahdataRBP11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$RBP12 = $jumlahdataRBP12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$RBP21 = $jumlahdataRBP21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$RBP22 = $jumlahdataRBP22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$RBP31 = $jumlahdataRBP31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$RBP32 = $jumlahdataRBP32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$RBP41 = $jumlahdataRBP41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$RBP42 = $jumlahdataRBP42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$SC11 = $jumlahdataSC11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$SC12 = $jumlahdataSC12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$SC21 = $jumlahdataSC21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$SC22 = $jumlahdataSC22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$SC31 = $jumlahdataSC31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$SC32 = $jumlahdataSC32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$SC41 = $jumlahdataSC41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$SC42 = $jumlahdataSC42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$SC51 = $jumlahdataSC51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$SC52 = $jumlahdataSC52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$FBS01 = $jumlahdataFBS01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$FBS02 = $jumlahdataFBS02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$FBS11 = $jumlahdataFBS11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$FBS12 = $jumlahdataFBS12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$RER01 = $jumlahdataRER01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$RER02 = $jumlahdataRER02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$RER11 = $jumlahdataRER11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$RER12 = $jumlahdataRER12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$RER21 = $jumlahdataRER21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$RER22 = $jumlahdataRER22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$MHRA11 = $jumlahdataMHRA11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$MHRA12 = $jumlahdataMHRA12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$MHRA21 = $jumlahdataMHRA21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$MHRA22 = $jumlahdataMHRA22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$MHRA31 = $jumlahdataMHRA31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$MHRA32 = $jumlahdataMHRA32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$MHRA41 = $jumlahdataMHRA41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$MHRA42 = $jumlahdataMHRA42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$MHRA51 = $jumlahdataMHRA51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$MHRA52 = $jumlahdataMHRA52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$OldPeak11 = $jumlahdataOldPeak11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$OldPeak12 = $jumlahdataOldPeak12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$OldPeak21 = $jumlahdataOldPeak21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$OldPeak22 = $jumlahdataOldPeak22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$OldPeak31 = $jumlahdataOldPeak31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$OldPeak32 = $jumlahdataOldPeak32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$OldPeak41 = $jumlahdataOldPeak41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$OldPeak42 = $jumlahdataOldPeak42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$OldPeak51 = $jumlahdataOldPeak51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$OldPeak52 = $jumlahdataOldPeak52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$EIA01 = $jumlahdataEIA01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$EIA02 = $jumlahdataEIA02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$EIA11 = $jumlahdataEIA11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$EIA12 = $jumlahdataEIA12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$ts11 = $jumlahdatats11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$ts12 = $jumlahdatats12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$ts21 = $jumlahdatats21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$ts22 = $jumlahdatats22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$ts31 = $jumlahdatats31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$ts32 = $jumlahdatats32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$NoMV01 = $jumlahdataNoMV01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$NoMV02 = $jumlahdataNoMV02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$NoMV11 = $jumlahdataNoMV11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$NoMV12 = $jumlahdataNoMV12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$NoMV21 = $jumlahdataNoMV21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$NoMV22 = $jumlahdataNoMV22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$NoMV31 = $jumlahdataNoMV31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$NoMV32 = $jumlahdataNoMV32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$Thal11 = $jumlahdataThal11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Thal12 = $jumlahdataThal12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$Thal21 = $jumlahdataThal21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Thal22 = $jumlahdataThal22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$Thal31 = $jumlahdataThal31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$Thal32 = $jumlahdataThal32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

if ($Age <= 40) {
    $xAge = $Age11;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 41 && $Age <= 50) {
    $xAge =  $Age21;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 51 && $Age <= 60) {
    $xAge =  $Age31;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 61 && $Age <= 70) {
    $xAge =  $Age41;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 71) {
    $xAge =  $Age51;
    // echo "Age : ".$xAge.", ";
} else {
    echo "
    <script>
        alert('Age tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($Sex == 0) {
    $xSex = $Sex01;
    // echo "Sex : ".$xSex.", ";
} elseif ($Sex == 1) {
    $xSex =  $Sex11;
    // echo "Sex : ".$xSex.", ";
} else {
    echo "
    <script>
        alert('Sex tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($CPT ==  1) {
    $xCPT = $CPT11;
    // echo "CPT : ".$xCPT.", ";
} elseif ($CPT == 2) {
    $xCPT = $CPT21;
    // echo "CPT : ".$xCPT.", ";
} elseif ($CPT == 3) {
    $xCPT =  $CPT31;
    // echo "CPT : ".$xCPT.", ";
} elseif ($CPT == 4) {
    $xCPT =  $CPT41;
    // echo "CPT : ".$xCPT.", ";
} else {
    echo "
    <script>
        alert('Chest Pain Type tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($RBP <= 110) {
    $xRBP = $RBP11;
    // echo "RBP : ".$xRBP.", ";
} elseif ($RBP >= 111 && $RBP <= 140) {
    $xRBP =  $RBP21;
    // echo "RBP : ".$xRBP.", ";
} elseif ($RBP >= 141 && $RBP <= 160) {
    $xRBP =  $RBP31;
    // echo "RBP : ".$xRBP.", ";
} elseif ($RBP >= 161) {
    $xRBP =  $RBP41;
    // echo "RBP : ".$xRBP.", ";
} else {
    echo "
    <script>
        alert('Resting Blood Pressure tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($SC <= 220) {
    $xSC = $SC11;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 221 && $SC <= 320) {
    $xSC =  $SC21;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 321 && $SC <= 420) {
    $xSC =  $SC31;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 421 && $SC <= 520) {
    $xSC =  $SC41;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 521) {
    $xSC =  $SC51;
    // echo "SC : ".$xSC.", ";
} else {
    echo "
    <script>
        alert('Serum Cholestoral tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($FBS == 0) {
    $xFBS = $FBS01;
    // echo "FBS : ".$xFBS.", ";
} elseif ($FBS == 1) {
    $xFBS =  $FBS11;
    // echo "FBS : ".$xFBS.", ";
} else {
    echo "
    <script>
        alert('Fasting Blood Sugar tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($RER == 0) {
    $xRER = $RER01;
    // echo "RER : ".$xRER.", ";
} elseif ($RER == 1) {
    $xRER =  $RER11;
    // echo "RER : ".$xRER.", ";
} elseif ($RER == 2) {
    $xRER =  $RER21;
    // echo "RER : ".$xRER.", ";
} else {
    echo "
    <script>
        alert('Resting Electrocardiographic tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($MHRA <= 115) {
    $xMHRA = $MHRA11;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 116 && $MHRA <= 135) {
    $xMHRA =  $MHRA21;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 136 && $MHRA <= 155) {
    $xMHRA =  $MHRA31;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 156 && $MHRA <= 175) {
    $xMHRA =  $MHRA41;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 176) {
    $xMHRA =  $MHRA51;
    // echo "MHRA : ".$xMHRA.", ";
} else {
    echo "
    <script>
        alert('Maximum Heart Rate tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($EIA == 0) {
    $xEIA = $EIA01;
    // echo "EIA : ".$xEIA.", ";
} elseif ($EIA == 1) {
    $xEIA =  $EIA11;
    // echo "EIA : ".$xEIA.", ";
} else {
    echo "
    <script>
        alert('Exercise Induced Angina tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($OldPeak <= 1) {
    $xOldPeak = $OldPeak11;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 1.1 && $OldPeak <= 2) {
    $xOldPeak =  $OldPeak21;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 2.2 && $OldPeak <= 3) {
    $xOldPeak =  $OldPeak31;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 3.3 && $OldPeak <= 4) {
    $xOldPeak =  $OldPeak41;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 4.1) {
    $xOldPeak =  $OldPeak51;
    // echo "OldPeak : ".$xOldPeak.", ";
} else {
    echo "
    <script>
        alert('OldPeak tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($TSoftPESTS ==  1) {
    $xts = $ts11;
    // echo "ts : ".$xts.", ";
} elseif ($TSoftPESTS == 2) {
    $xts = $ts21;
    // echo "ts : ".$xts.", ";
} elseif ($TSoftPESTS == 3) {
    $xts =  $ts31;
    // echo "ts : ".$xts.", ";
} else {
    echo "
    <script>
        alert('ST Segment tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($NoMV ==  0) {
    $xNoMV = $NoMV01;
    // echo "NoMV : ".$xNoMV.", ";
} elseif ($NoMV == 1) {
    $xNoMV = $NoMV11;
    // echo "NoMV : ".$xNoMV.", ";
} elseif ($NoMV == 2) {
    $xNoMV = $NoMV21;
    // echo "NoMV : ".$xNoMV.", ";
} elseif ($NoMV == 3) {
    $xNoMV = $NoMV31;
    // echo "NoMV : ".$xNoMV.", ";
} else {
    echo "
    <script>
        alert('No Major Vessels tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

if ($Thal ==  3) {
    $xThal = $Thal11;
    // echo "Thal : ".$xThal.", ";
} elseif ($Thal == 6) {
    $xThal = $Thal21;
    // echo "Thal : ".$xThal.", ";
} elseif ($Thal == 7) {
    $xThal =  $Thal31;
    // echo "Thal : ".$xThal.", ";
} else {
    echo "
    <script>
        alert('Thal tidak Valid !');
        window.history.go(-1)
    </script>
    ";
}

// =======================================HASIL PL1=======================================
$pl1 = $xAge * $xSex * $xCPT * $xRBP * $xSC * $xFBS * $xRER * $xMHRA * $xEIA * $xOldPeak * $xts * $xNoMV * $xThal;

if ($Age <= 40) {
    $xAge = $Age12;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 41 && $Age <= 50) {
    $xAge =  $Age22;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 51 && $Age <= 60) {
    $xAge =  $Age32;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 61 && $Age <= 70) {
    $xAge =  $Age42;
    // echo "Age : ".$xAge.", ";
} elseif ($Age >= 71) {
    $xAge =  $Age52;
    // echo "Age : ".$xAge.", ";
}

if ($Sex == 0) {
    $xSex = $Sex02;
    // echo "Sex : ".$xSex.", ";
} elseif ($Sex == 1) {
    $xSex =  $Sex12;
    // echo "Sex : ".$xSex.", ";
}

if ($CPT ==  1) {
    $xCPT = $CPT12;
    // echo "CPT : ".$xCPT.", ";
} elseif ($CPT == 2) {
    $xCPT = $CPT22;
    // echo "CPT : ".$xCPT.", ";
} elseif ($CPT == 3) {
    $xCPT =  $CPT32;
    // echo "CPT : ".$xCPT.", ";
} elseif ($CPT == 4) {
    $xCPT =  $CPT42;
    // echo "CPT : ".$xCPT.", ";
}

if ($RBP <= 110) {
    $xRBP = $RBP12;
    // echo "RBP : ".$xRBP.", ";
} elseif ($RBP >= 111 && $RBP <= 140) {
    $xRBP =  $RBP22;
    // echo "RBP : ".$xRBP.", ";
} elseif ($RBP >= 141 && $RBP <= 160) {
    $xRBP =  $RBP32;
    // echo "RBP : ".$xRBP.", ";
} elseif ($RBP >= 161) {
    $xRBP =  $RBP42;
    // echo "RBP : ".$xRBP.", ";
}

if ($SC <= 220) {
    $xSC = $SC12;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 221 && $SC <= 320) {
    $xSC =  $SC22;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 321 && $SC <= 420) {
    $xSC =  $SC32;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 421 && $SC <= 520) {
    $xSC =  $SC42;
    // echo "SC : ".$xSC.", ";
} elseif ($SC >= 521) {
    $xSC =  $SC52;
    // echo "SC : ".$xSC.", ";
}

if ($FBS == 0) {
    $xFBS = $FBS02;
    // echo "FBS : ".$xFBS.", ";
} elseif ($FBS == 1) {
    $xFBS =  $FBS12;
    // echo "FBS : ".$xFBS.", ";
}

if ($RER == 0) {
    $xRER = $RER02;
    // echo "RER : ".$xRER.", ";
} elseif ($RER == 1) {
    $xRER =  $RER12;
    // echo "RER : ".$xRER.", ";
} elseif ($RER == 2) {
    $xRER =  $RER22;
    // echo "RER : ".$xRER.", ";
}

if ($MHRA <= 115) {
    $xMHRA = $MHRA12;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 116 && $MHRA <= 135) {
    $xMHRA =  $MHRA22;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 136 && $MHRA <= 155) {
    $xMHRA =  $MHRA32;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 156 && $MHRA <= 175) {
    $xMHRA =  $MHRA42;
    // echo "MHRA : ".$xMHRA.", ";
} elseif ($MHRA >= 176) {
    $xMHRA =  $MHRA52;
    // echo "MHRA : ".$xMHRA.", ";
}

if ($EIA == 0) {
    $xEIA = $EIA02;
    // echo "EIA : ".$xEIA.", ";
} elseif ($EIA == 1) {
    $xEIA =  $EIA12;
    // echo "EIA : ".$xEIA.", ";
}

if ($OldPeak <= 1) {
    $xOldPeak = $OldPeak12;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 1.1 && $OldPeak <= 2) {
    $xOldPeak =  $OldPeak22;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 2.2 && $OldPeak <= 3) {
    $xOldPeak =  $OldPeak32;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 3.3 && $OldPeak <= 4) {
    $xOldPeak =  $OldPeak42;
    // echo "OldPeak : ".$xOldPeak.", ";
} elseif ($OldPeak >= 4.1) {
    $xOldPeak =  $OldPeak52;
    // echo "OldPeak : ".$xOldPeak.", ";
}

if ($TSoftPESTS ==  1) {
    $xts = $ts12;
    // echo "ts : ".$xts.", ";
} elseif ($TSoftPESTS == 2) {
    $xts = $ts22;
    // echo "ts : ".$xts.", ";
} elseif ($TSoftPESTS == 3) {
    $xts = $ts32;
    // echo "ts : ".$xts.", ";
}

if ($NoMV ==  0) {
    $xNoMV = $NoMV02;
    // echo "NoMV : ".$xNoMV.", ";
} elseif ($NoMV == 1) {
    $xNoMV = $NoMV12;
    // echo "NoMV : ".$xNoMV.", ";
} elseif ($NoMV == 2) {
    $xNoMV = $NoMV22;
    // echo "NoMV : ".$xNoMV.", ";
} elseif ($NoMV == 3) {
    $xNoMV = $NoMV32;
    // echo "NoMV : ".$xNoMV.", ";
}

if ($Thal ==  3) {
    $xThal = $Thal12;
    // echo "Thal : ".$xThal.", ";
} elseif ($Thal == 6) {
    $xThal = $Thal22;
    // echo "Thal : ".$xThal.", ";
} elseif ($Thal == 7) {
    $xThal =  $Thal32;
    // echo "Thal : ".$xThal.", ";
}
// =======================================HASIL PL2=======================================
$pl2 = $xAge * $xSex * $xCPT * $xRBP * $xSC * $xFBS * $xRER * $xMHRA * $xEIA * $xOldPeak * $xts * $xNoMV * $xThal;
?>

<section class="ftco-section contact-section pt-4">
    <div class="container">
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-12 mb-md-5">
                <div class="ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Hasil Klasifikasi</h1>
                </div>
                <div class="table-responsive-lg my-3">
                    <table class="table table-striped table-hover text-center shadow">
                        <thead>
                            <tr>
                                <th Scope="col">#</th>
                                <th Scope="col">Name</th>
                                <th Scope="col">Age</th>
                                <th Scope="col">Sex</th>
                                <th Scope="col">CP</th>
                                <th Scope="col">RBP</th>
                                <th Scope="col">SC</th>
                                <th Scope="col">FBS</th>
                                <th Scope="col">RER</th>
                                <th Scope="col">MHRA</th>
                                <th Scope="col">EIA</th>
                                <th Scope="col">OldPeak</th>
                                <th Scope="col">STS</th>
                                <th Scope="col">NV</th>
                                <th Scope="col">T</th>
                                <!-- <th Scope="col">Heart Desease</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th Scope="row">#</th>
                                <td><?= $Name ?></td>
                                <td><?= $Age ?></td>
                                <td><?= $Sex ?></td>
                                <td><?= $CPT ?></td>
                                <td><?= $RBP ?></td>
                                <td><?= $SC ?></td>
                                <td><?= $FBS ?></td>
                                <td><?= $RER ?></td>
                                <td><?= $MHRA ?></td>
                                <td><?= $EIA ?></td>
                                <td><?= $OldPeak ?></td>
                                <td><?= $TSoftPESTS ?></td>
                                <td><?= $NoMV ?></td>
                                <td><?= $Thal ?></td>
                                <!-- <td><?= $Label ?></td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <?php if ($pl1 >= $pl2) : ?>
                            <h4 class="mb-3">P (X | Group = 1) = <?= $pl1 ?></h4>
                            <p>Jadi, Conditional Probabilites yang terpilih adalah Group 1 / Absence</p>
                            <?php $this->db->update('tb_input', ['Hasil' => 1], ['Name' => $Name]) ?>
                        <?php elseif ($pl1 <= $pl2) : ?>
                            <h4 class="mb-3">P (X | Group = 2) = <?= $pl2 ?></h4>
                            <p>Jadi, Conditional Probabilites yang terpilih adalah Group 2 / Presence</p>
                            <?php $this->db->update('tb_input', ['Hasil' => 2], ['Name' => $Name]); ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>