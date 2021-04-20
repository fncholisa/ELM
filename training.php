<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <style>
            body{
                background: white;
            }
        </style>
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        
        <div class="sidebar">
            <header><img src="img/janjijiwa.png" style="weidth:100px;height:100px;padding:3;margin-left:2px;"></header>
            <ul>
                <li><a href="http://localhost/sp/home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="http://localhost/sp/data.php"><i class="fas fa-filter"></i>Sistem Prediksi</a></li>
                <li><a href="http://localhost/sp/nata.php"><i class="fas fa-file"></i>Data Penjualan</a></li>
            </ul>
        </div>

        <div style="margin-left:10%;padding:80px 10px;">
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-25">
                            <label for="data">Data Load</label>
                        </div>
                        <div class="col-75">
                            <input type="upload" value="Upload">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fitur">Jumlah Fitur</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fitur" name="jumlahfitur" placeholder="Wajib Diisi..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="hiden">Jumlah Hiddden Neuron</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="hiden" name="jumlahhiden" placeholder="Wajib Diisi..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="persen">Persentase Pembagian Data</label>
                        </div>
                        <div class="col-75">
                            <select id="persen" name="persendata">
                                <option value="data1">Data Training 50% : Data Testing 50%</option>
                                <option value="data2">Data Training 80% : Data Testing 20%</option>
                                <option value="data3">Data Training 90% : Data Testing 10%</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <br><input type="submit" value="Submit">
                    </div>
                </form>
            </div>

            <div class="btn-group">
                <a href="http://localhost/sp/data.php" class="button">Data</a>
                <a href="http://localhost/sp/pembagian.php" class="button">Pembagian Data</a>
                <a href="http://localhost/sp/training.php" class="button">Proses Training</a>
                <a href="http://localhost/sp/testing.php" class="button">Proses Testing</a>
                <a href="http://localhost/sp/evaluasi.php" class="button">Hasil Evaluasi</a>
                <a href="http://localhost/sp/grafik.php" class="button">Hasil Prediksi</a>
            </div>

            <h2>Hasil Hinit</h2>
        <table>
            <tr>
                <th>Hinit-1</th>
                <th>Hinit-2</th>
                <th>Hinit-3</th>
                <th>Hinit-4</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>

        <h2>Hasil Fungsi Aktivasi</h2>
        <table>
            <tr>
                <th>H(x)-1</th>
                <th>H(x)-2</th>
                <th>H(x)-3</th>
                <th>H(x)-4</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>

        <h2>Hasil Transpose</h2>
        <table>
            <tr>
                <th>HT-1</th>
                <th>HT-2</th>
                <th>HT-3</th>
                <th>HT-4</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>

        <h2>Hasil Invers OBE</h2>
        <table>
            <tr>
                <th>Invers-1</th>
                <th>Invers-2</th>
                <th>Invers-3</th>
                <th>Invers-4</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>

        <h2>Hasil H+</h2>
        <table>
            <tr>
                <th>H+1</th>
                <th>H+2</th>
                <th>H+3</th>
                <th>H+4</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>

        <h2>Hasil Output Weight</h2>
        <table>
            <tr>
                <th>B-1</th>
                <th>B-2</th>
                <th>B-3</th>
                <th>B-4</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </table>
        </div>        
    </body>
</html>