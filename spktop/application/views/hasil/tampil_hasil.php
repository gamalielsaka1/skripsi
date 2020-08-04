<section class="content-header">
    <h1>
        Hasil Nilai
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Nilai Rij</h4>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Pengalaman</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Penampilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $u = [];
                                $pd = [];
                                $pg = [];
                                $d = [];
                                $pn = [];
                                foreach ($query->result() as $q) { ?>
                                    <?php $u[] = pow($q->umur, 2); ?>
                                    <?php $pd[] = pow($q->pendidikan, 2); ?>
                                    <?php $pg[] = pow($q->pengalaman, 2); ?>
                                    <?php $d[] = pow($q->dokumen, 2); ?>
                                    <?php $pn[] = pow($q->penampilan, 2); ?>
                                <?php }; ?>

                                <!-- nilai jumlah -->
                                <?php $jumlahu =  array_sum($u); ?>
                                <?php $jumlahpd =  array_sum($pd); ?>
                                <?php $jumlahpg =  array_sum($pg); ?>
                                <?php $jumlahd =  array_sum($d); ?>
                                <?php $jumlahpn =  array_sum($pn); ?>
                                <!-- end nilai jumlah -->

                                <!-- akar -->

                                <?php round($akharu = sqrt($jumlahu), 3); ?>
                                <?php round($akharpd = sqrt($jumlahpd), 3); ?>
                                <?php round($akharpg = sqrt($jumlahpg), 3); ?>
                                <?php round($akhard = sqrt($jumlahd), 3); ?>
                                <?php round($akharpn = sqrt($jumlahpn), 3); ?>
                                <!-- end akar -->



                                <?php foreach ($query->result() as $b) { ?>
                                    <tr>
                                
                                        <td scope="row"><?= $no++; ?></td>
                                        <td scope="row"><?= $b->nama; ?></td>
                                        <td><?= $hux[] = round($bagiu[] = ($b->umur) / $akharu, 3); ?></td>
                                        <td><?= $hpdx[] = round($bagipd[] = ($b->pendidikan) / $akharpd, 3); ?></td>
                                        <td><?= $hpgx[] = round($bagipg[] = ($b->pengalaman) / $akharpg, 3); ?></td>
                                        <td><?= $hdx[] = round($bagid[] = ($b->dokumen) / $akhard, 3); ?></td>
                                        <td><?= $hpnx[] = round($bagipn[] = ($b->penampilan) / $akharpn, 3); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- YIJ -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Nilai Yij</h4>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Pengalaman</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Penampilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $u = [];
                                $pd = [];
                                $pg = [];
                                $d = [];
                                $pn = [];
                                foreach ($query->result() as $q) { ?>
                                    <?php $u[] = pow($q->umur, 2); ?>
                                    <?php $pd[] = pow($q->pendidikan, 2); ?>
                                    <?php $pg[] = pow($q->pengalaman, 2); ?>
                                    <?php $d[] = pow($q->dokumen, 2); ?>
                                    <?php $pn[] = pow($q->penampilan, 2); ?>
                                <?php }; ?>

                                <!-- nilai jumlah -->
                                <?php $jumlahu =  array_sum($u); ?>
                                <?php $jumlahpd =  array_sum($pd); ?>
                                <?php $jumlahpg =  array_sum($pg); ?>
                                <?php $jumlahd =  array_sum($d); ?>
                                <?php $jumlahpn =  array_sum($pn); ?>
                                <!-- end nilai jumlah -->

                                <!-- akar -->

                                <?php round($akharu = sqrt($jumlahu), 3); ?>
                                <?php round($akharpd = sqrt($jumlahpd), 3); ?>
                                <?php round($akharpg = sqrt($jumlahpg), 3); ?>
                                <?php round($akhard = sqrt($jumlahd), 3); ?>
                                <?php round($akharpn = sqrt($jumlahpn), 3); ?>
                                <!-- end akar -->



                                <?php foreach ($query->result() as $b) foreach ($ku->result() as $kku)
                                    foreach ($kpd->result() as $kkpd) foreach ($kpg->result() as $kkpg)
                                        foreach ($kd->result() as $kkd) foreach ($kpn->result() as $kkpn) { ?>
                                    <tr>
                                        <td scope="row"><?= $no++; ?></td>
                                        <td scope="row"><?= $b->nama; ?></td>
                                        <td><?= $hu[] = round($bagiu[] = (($b->umur) / $akharu) * $kku->bobot, 3); ?></td>
                                        <td><?= $hpd[] = round($bagipd[] = (($b->pendidikan) / $akharpd) * $kkpd->bobot, 3); ?></td>
                                        <td><?= $hpg[] = round($bagipg[] = (($b->pengalaman) / $akharpg) * $kkpg->bobot, 3); ?></td>
                                        <td><?= $hd[] = round($bagid[] = (($b->dokumen) / $akhard) * $kkd->bobot, 3); ?></td>
                                        <td><?= $hpn[] = round($bagipn[] = (($b->penampilan) / $akharpn) * $kkpn->bobot, 3); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- YIJEND -->
<!-- hasil min max -->
<section class="content-header">
    <h1>
        Hasil Max & Min
    </h1>
</section>
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Nilai Max (+)</h4>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">No</th> -->
                                    <th scope="col">Umur</th>
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Pengalaman</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Penampilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php $no = 1; ?> -->
                                <tr>
                                    <!-- <td><?= $no++; ?></td> -->
                                    <td><?= $maxu = max($hu); ?></td>
                                    <td><?= $maxpd = max($hpd); ?></td>
                                    <td><?= $maxpg = max($hpg); ?></td>
                                    <td><?= $maxd = max($hd); ?></td>
                                    <td><?= $maxpn = max($hpn); ?></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- min -->
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Nilai Min (-)</h4>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">No</th> -->
                                    <th scope="col">Umur</th>
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Pengalaman</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Penampilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php $no = 1; ?> -->
                                <tr>
                                    <!-- <td><?= $no++; ?></td> -->
                                    <td><?= $minu = min($hu); ?></td>
                                    <td><?= $minpd = min($hpd); ?></td>
                                    <td><?= $minpg = min($hpg); ?></td>
                                    <td><?= $mind = min($hd); ?></td>
                                    <td><?= $minpn = min($hpn); ?></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end min -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hasil min max -->

<!-- DI- -->

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Nilai Di+</h4>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Di+</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $u = [];
                                $pd = [];
                                $pg = [];
                                $d = [];
                                $pn = [];
                                foreach ($query->result() as $q) { ?>
                                    <?php $u[] = pow($q->umur, 2); ?>
                                    <?php $pd[] = pow($q->pendidikan, 2); ?>
                                    <?php $pg[] = pow($q->pengalaman, 2); ?>
                                    <?php $d[] = pow($q->dokumen, 2); ?>
                                    <?php $pn[] = pow($q->penampilan, 2); ?>
                                <?php }; ?>

                                <!-- nilai jumlah -->
                                <?php $jumlahu =  array_sum($u); ?>
                                <?php $jumlahpd =  array_sum($pd); ?>
                                <?php $jumlahpg =  array_sum($pg); ?>
                                <?php $jumlahd =  array_sum($d); ?>
                                <?php $jumlahpn =  array_sum($pn); ?>
                                <!-- end nilai jumlah -->

                                <!-- akar -->

                                <?php round($akharu = sqrt($jumlahu), 3); ?>
                                <?php round($akharpd = sqrt($jumlahpd), 3); ?>
                                <?php round($akharpg = sqrt($jumlahpg), 3); ?>
                                <?php round($akhard = sqrt($jumlahd), 3); ?>
                                <?php round($akharpn = sqrt($jumlahpn), 3); ?>
                                <!-- end akar -->



                                <?php
                                $huPlus = [];
                                foreach ($query->result() as $b) foreach ($ku->result() as $kku)
                                    foreach ($kpd->result() as $kkpd) foreach ($kpg->result() as $kkpg)
                                        foreach ($kd->result() as $kkd) foreach ($kpn->result() as $kkpn) { ?>
                                        
                                        
                                        <?php $huPlus =  round(pow(($bagiu[] = $maxu - ( ( ($b->umur) / $akharu) * $kku->bobot) ), 2), 3); ?>
                                        <?php $hpdPlus = round(pow(($bagipd[] = $maxpd - ( ( ($b->pendidikan) / $akharpd) * $kkpd->bobot) ), 2), 3); ?>
                                        <?php $hpgPlus = round(pow(($bagipg[] = $maxpg - ((($b->pengalaman) / $akharpg) * $kkpg->bobot) ), 2), 3); ?>
                                        <?php $hdPlus = round(pow(($bagid[] = $maxd - ((($b->dokumen) / $akhard) * $kkd->bobot) ), 2), 3); ?>
                                        <?php $hpnPlus = round(pow(($bagipn[] = $maxpn - ((($b->penampilan) / $akharpn) * $kkpn->bobot) ), 2), 3); ?>
                                    <tr>
                                        <td scope="row"><?= $no++; ?></td>
                                        <td scope="row"><?= $b->nama; ?></td>
                                        <td><?= round(sqrt($huPlus + $hpdPlus + $hpgPlus + $hdPlus + $hpnPlus),3); ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Nilai Di-</h4>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Di-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $u = [];
                                $pd = [];
                                $pg = [];
                                $d = [];
                                $pn = [];
                                foreach ($query->result() as $q) { ?>
                                    <?php $u[] = pow($q->umur, 2); ?>
                                    <?php $pd[] = pow($q->pendidikan, 2); ?>
                                    <?php $pg[] = pow($q->pengalaman, 2); ?>
                                    <?php $d[] = pow($q->dokumen, 2); ?>
                                    <?php $pn[] = pow($q->penampilan, 2); ?>
                                <?php }; ?>

                                <!-- nilai jumlah -->
                                <?php $jumlahu =  array_sum($u); ?>
                                <?php $jumlahpd =  array_sum($pd); ?>
                                <?php $jumlahpg =  array_sum($pg); ?>
                                <?php $jumlahd =  array_sum($d); ?>
                                <?php $jumlahpn =  array_sum($pn); ?>
                                <!-- end nilai jumlah -->

                                <!-- akar -->

                                <?php round($akharu = sqrt($jumlahu), 3); ?>
                                <?php round($akharpd = sqrt($jumlahpd), 3); ?>
                                <?php round($akharpg = sqrt($jumlahpg), 3); ?>
                                <?php round($akhard = sqrt($jumlahd), 3); ?>
                                <?php round($akharpn = sqrt($jumlahpn), 3); ?>
                                <!-- end akar -->



                                <?php
                                $huPlus = [];
                                foreach ($query->result() as $b) foreach ($ku->result() as $kku)
                                    foreach ($kpd->result() as $kkpd) foreach ($kpg->result() as $kkpg)
                                        foreach ($kd->result() as $kkd) foreach ($kpn->result() as $kkpn) { ?>
                                        
                                        <?php $huPlus =  round(pow(($bagiu[] = $maxu - ( ( ($b->umur) / $akharu) * $kku->bobot) ), 2), 3); ?>
                                        <?php $hpdPlus = round(pow(($bagipd[] = $maxpd - ( ( ($b->pendidikan) / $akharpd) * $kkpd->bobot) ), 2), 3); ?>
                                        <?php $hpgPlus = round(pow(($bagipg[] = $maxpg - ( ( ($b->pengalaman) / $akharpg) * $kkpg->bobot) ), 2), 3); ?>
                                        <?php $hdPlus = round(pow(($bagid[] = $maxd - ( ( ($b->dokumen) / $akhard) * $kkd->bobot) ), 2), 3); ?>
                                        <?php $hpnPlus = round(pow(($bagipn[] = $maxpn - ( ( ($b->penampilan) / $akharpn) * $kkpn->bobot) ), 2), 3); ?>

                                        <?php $huMin =  round(pow(($bagiu[] = $minu - ( ( ($b->umur) / $akharu) * $kku->bobot) ), 2), 3); ?>
                                        <?php $hpdMin = round(pow(($bagipd[] = $minpd - ( ( ($b->pendidikan) / $akharpd) * $kkpd->bobot) ), 2), 3); ?>
                                        <?php $hpgMin = round(pow(($bagipg[] = $minpg - ( ( ($b->pengalaman) / $akharpg) * $kkpg->bobot) ), 2), 3); ?>
                                        <?php $hdMin = round(pow(($bagid[] = $mind - ( ( ($b->dokumen) / $akhard) * $kkd->bobot) ), 2), 3); ?>
                                        <?php $hpnMin = round(pow(($bagipn[] = $minpn - ( ( ($b->penampilan) / $akharpn) * $kkpn->bobot) ), 2), 3); ?>
                                    <tr>
                                        <td scope="row"><?= $no++; ?></td>
                                        <td scope="row"><?= $b->nama; ?></td>
                                        <td><?= round(sqrt($huMin + $hpdMin + $hpgMin + $hdMin + $hpnMin),3); ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ENDDI- -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Nilai V / Nilai Akhir</h4>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Vi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $u = [];
                                $pd = [];
                                $pg = [];
                                $d = [];
                                $pn = [];
                                $hk = [];
                                
                                foreach ($query->result() as $q) { ?>
                                    <?php $u[] = pow($q->umur, 2); ?>
                                    <?php $pd[] = pow($q->pendidikan, 2); ?>
                                    <?php $pg[] = pow($q->pengalaman, 2); ?>
                                    <?php $d[] = pow($q->dokumen, 2); ?>
                                    <?php $pn[] = pow($q->penampilan, 2); ?>
                                <?php }; ?>

                                <!-- nilai jumlah -->
                                <?php $jumlahu =  array_sum($u); ?>
                                <?php $jumlahpd =  array_sum($pd); ?>
                                <?php $jumlahpg =  array_sum($pg); ?>
                                <?php $jumlahd =  array_sum($d); ?>
                                <?php $jumlahpn =  array_sum($pn); ?>
                                <!-- end nilai jumlah -->

                                <!-- akar -->

                                <?php round($akharu = sqrt($jumlahu), 3); ?>
                                <?php round($akharpd = sqrt($jumlahpd), 3); ?>
                                <?php round($akharpg = sqrt($jumlahpg), 3); ?>
                                <?php round($akhard = sqrt($jumlahd), 3); ?>
                                <?php round($akharpn = sqrt($jumlahpn), 3); ?>
                                <!-- end akar -->



                                <?php
                                $huPlus = [];
                                $hk = [] ;
                                foreach ($query->result() as $b) foreach ($ku->result() as $kku)
                                    foreach ($kpd->result() as $kkpd) foreach ($kpg->result() as $kkpg)
                                        foreach ($kd->result() as $kkd) foreach ($kpn->result() as $kkpn) { ?>

                                        <?php $huPlus =  round(pow(($bagiu[] = ( ( ($b->umur) / $akharu) * $kku->bobot)  - $maxu), 2), 3); ?>
                                        <?php $hpdPlus = round(pow(($bagipd[] = ( ( ($b->pendidikan) / $akharpd) * $kkpd->bobot) - $maxpd), 2), 3); ?>
                                        <?php $hpgPlus = round(pow(($bagipg[] = ( ( ($b->pengalaman) / $akharpg) * $kkpg->bobot) - $maxpg), 2), 3); ?>
                                        <?php $hdPlus = round(pow(($bagid[] = ( ( ($b->dokumen) / $akhard) * $kkd->bobot) - $maxd), 2), 3); ?>
                                        <?php $hpnPlus = round(pow(($bagipn[] = ( ( ($b->penampilan) / $akharpn) * $kkpn->bobot) - $maxpn), 2), 3); ?>

                                        <?php $huMin =  round(pow(($bagiu[] = $minu - ( ( ($b->umur) / $akharu) * $kku->bobot) ), 2), 3); ?>
                                        <?php $hpdMin = round(pow(($bagipd[] = $minpd - ( ( ($b->pendidikan) / $akharpd) * $kkpd->bobot) ), 2), 3); ?>
                                        <?php $hpgMin = round(pow(($bagipg[] = $minpg - ( ( ($b->pengalaman) / $akharpg) * $kkpg->bobot) ), 2), 3); ?>
                                        <?php $hdMin = round(pow(($bagid[] = $mind - ( ( ($b->dokumen) / $akhard) * $kkd->bobot) ), 2), 3); ?>
                                        <?php $hpnMin = round(pow(($bagipn[] = $minpn - ( ( ($b->penampilan) / $akharpn) * $kkpn->bobot) ), 2), 3); ?>
                                        
                                        <?php $dplus = round(sqrt($huPlus + $hpdPlus + $hpgPlus + $hdPlus + $hpnPlus),3); ?>

                                        <?php $dmin = round(sqrt($huMin + $hpdMin + $hpgMin + $hdMin + $hpnMin),3); ?>

                                        <?php $ht = $dmin + $dplus ?>
                                    <tr>
                                        <td scope="row"><?= $no++; ?></td>
                                        <td scope="row"><?= $b->nama; ?></td>
                                        <td><?= $hk = round($dmin / $ht,3); ?></td>                             
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
