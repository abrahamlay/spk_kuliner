
                <div class="grid fluid">
                     <div class="row ">
                         <div class="span8 offset2">
                             <div class="panel">
                                <div class="panel-header bg-darkRed fg-white">
                                    Decission Support System Calculation
                                </div>
                                <div class="panel-content">
                                        <div class="row ">
                                            <div class="span4 offset2">
                                               <strong>Penjelasan inputan</strong>
                                            </div>
                                         
                                        </div>
                                        <?php echo form_open('spk_hitung/calculate');?>
                                        <div class="row ">
                                            <div class="span2 offset3">
                                                Banyak Penduduk
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr1">
                                                         <?php foreach ($kr1 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="span2 offset3">
                                                Harga
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr2">
                                                       <?php foreach ($kr2 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="span2 offset3">
                                                Target
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr3">
                                                        <?php foreach ($kr3 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row ">
                                            <div class="span2 offset3">
                                                Kelengkapan
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr4">
                                                       <?php foreach ($kr4 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row ">
                                            <div class="span2 offset3">
                                                Pesaing
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr5">
                                                        <?php foreach ($kr5 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row ">
                                            <div class="span2 offset3">
                                                Potensi
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr6">
                                                       <?php foreach ($kr6 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row ">
                                            <div class="span2 offset3">
                                                Ketertarikan
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr7">
                                                        <?php foreach ($kr7 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row ">
                                            <div class="span2 offset3">
                                                Angkutan
                                            </div>
                                            <div class="span5"> 
                                                <div class="input-control select">
                                                    <select name="kr8">
                                                        <?php foreach ($kr8 as $tes => $oke)
                                                                     {
                                                                         echo "<option value='$oke->id_jenis'>$oke->jenis_kriteria</option>";
                                                                     }
                                                                         ;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row ">
                                            <div class="offset5">
                                                <button class="large bg-darkRed fg-white span6">Calculate</button>
                                            </div>
                                        </div>
                                        <?php echo form_close();?>
                                   </div>
                            </div>
                        </div>
                        
                    </div> 
                
        
    