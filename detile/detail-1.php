<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Film paling populer</title>
    <link rel="stylesheet" href="../css/detile.css">
    <link rel="stylesheet" href="Bootstrap 5/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
    <style>
        .blog-single, .article, .card{
            background-color: #10375C;
        }
        .article-title, h2, .article-content {
            color:#FEF9F2;
        }
    </style>
</head>
<body style="background: #011228;">
    <div class="blog-single gray-bg"></div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                        <img src="gambar/induk gajah.jpeg" class="icon-why-us" alt="icon"  style="width: auto;">
                        
                        </div>
                        <div class="article-title">
                        <h6><a href="#">Kumpulan pemain</a></h6>
                        <h2 style="color:#FEF9F2;">"Sinopsis Induk Gajah, Perjuangan Perempuan Batak Mencari Jodoh"</h2>
                            <div class="media">
                                <div class="avatar">
                                <img src="gambar/detail 2.jpg" class="icon-why-us" alt="icon" style="width: 100px;"> 
                                </div>
                                <div class="media-body">
                                <label>Rachel Roth</label>
                                <span>26 FEB 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p>Menjadi seorang perempuan terkadang tak semudah yang dikira, terlebih apabila kamu berasal dari keluarga Batak. Inilah yang dialami oleh tokoh Ira dalam serial Prime Video terbaru bertajuk "Induk Gajah".</p>
                            <p>Kental dengan budaya Batak, serial yang terdiri atas 8 episode ini menyoroti kisah perjuangan Ira, anak perempuan dari keluarga Batak yang masih sangat erat memegang adat, dalam mencari jodoh.</p>
                            <p>Bukan hanya menampilkan budaya Batak, detikers dijamin bakal kepincut dengan serial ini karena alur ceritanya yang gak ngebosenin karena disisipi banyak adegan komedi-romansa</p>
                            <h4 style="color:#FEF9F2;" >Sinopsis Serial Induk Gajah</h4>
                            <p>Serial Induk Gajah mengisahkan perjalanan hidup seorang anak perempuan dari suku Batak bernama Ira (Marshanda) yang terus-terusan dijodohkan ibunya, Mamak Uli (Tika Panggabean). Bukan tanpa alasan ibunya melakukan itu karena Ira yang sudah kepala tiga masih belum menikah juga.</p>
                            <blockquote>
                                <p>Pencarian jodoh di usia 30 tahun itu pun terbilang rumit. Pasalnya, Ira harus mencari pasangan hidup yang sesuai dengan kriteria ibunya. Adapun pria yang diinginkan sang ibu harus berasal dari suku Batak, seiman, dan satu gereja dengan keluarganya.</p>
                                <p>Sampai pada suatu saat, Ira dijodohkan oleh Mamak Uli kepada Marsel (Dimas Anggara), salah satu teman anaknya. Ternyata, Marsel juga menghadapi masalah yang sama dengan Ira: harus memiliki pasangan sesuai dengan kriteria ibu mereka.</p>
                                <p>Di samping harus mendapatkan jodoh yang sesuai dengan kriteria ibunya, Ira juga harus berhadapan dengan fisiknya yang gemuk seperti "gajah". Mamak Uli selalu memaksa Ira untuk terus mengubah penampilannya agar Ira segera mendapatkan jodoh, terlebih mengingat umurnya yang sudah 30 tahun.</p>
                                <h5>Cara menonton serial induk gajah</h5>
                                <p class="blockquote-footer">cara menonton serial Induk Gajah <cite title="Source Title">Detik sumut</cite></p>
                            </blockquote>
                            <p>Serial Induk Gajah sudah tayang di Prime Video sejak 23 Maret 2023 dengan jumlah 8 episode. Supaya dapat menonton serial ini, detikers harus mempunyai akun di aplikasi Prime Video terlebih dahulu.</p>
                            <p>Nah, itulah tadi sinopsis serial Induk Gajah, lengkap dengan cara menontonnya. Apakah kamu tertarik untuk menonton serial ini?</p>
                        </div>
                    </article>
                    <div class="contact-form article-comment">
                        <h4>Leave a Reply</h4>
                        <form id="contact-form" method="POST" action="submit_comment.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="name"  id="name" placeholder="Name *" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                            
                        <h2>Komentar</h2>
                        <div class="comment-container">
                            <?php
                            
                            include "koneksi.php";

                            $result = $conn->query("SELECT name, comment, created_at FROM comments ORDER BY created_at DESC");
                            if ($result->num_rows > 0){
                                while ($row = $result->fetch_assoc()){
                                    echo '<div class="comment">';
                                    echo '<p class="comment-author">'.htmlspecialchars($row['name']).'</p>';
                                    echo '<p class="comment-author">'.htmlspecialchars($row['comment']) . '</p>';
                                    echo '</div>';
                                }
                            }else{
                                echo '<p> Data Kosong</p>';
                            }
                            $conn->close();
                            ?> 
                            <!-- Tambahkan komentar lain di sini -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">                                    
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Categories Clouds</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled categories-clouds m-b-0">
                                <li><a href="javascript:void(0);">eCommerce</a></li>
                                <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                                <li><a href="javascript:void(0);">Creative UX</a></li>
                                <li><a href="javascript:void(0);">Wordpress</a></li>
                                <li><a href="javascript:void(0);">Angular JS</a></li>
                                <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                                <li><a href="javascript:void(0);">Website Design</a></li>
                                <li><a href="javascript:void(0);">HTML5</a></li>
                                <li><a href="javascript:void(0);">Infographics</a></li>
                                <li><a href="javascript:void(0);">Wordpress Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2 style="color: #DBD3D3; >Postingan Populer</h2>                        
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_post">
                                        <p class="m-b-0">Tanggal Rilis</p>
                                        <span>25 Januari 2018 (Indonesia)</span>
                                        <div class="img-post">
                                            <img src="gambar/induk01.jpg" alt="Awesome Image">                                        
                                        </div>                                            
                                    </div>
                                    <div class="single_post">
                                        <p class="m-b-0">Tanggal Rilis</p>
                                        <span>8 September 2016</span>
                                        <div class="img-post">
                                            <img src="gambar/induk05.jpg" alt="Awesome Image">                                            
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Kumpulan Film Terbaru</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled instagram-plugin m-b-0">
                                <li><a href="javascript:void(0);"><img src="gambar/induk06.jpg" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="gambar/induk07.jfif" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="gambar/induk10.jpg" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="gambar/induk gajah 1.jpg" alt="image description"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Hubungi kami untuk mengetahui lebih lanjut.</h2>
                                <small>Dapatkan produk/berita kami lebih awal dari yang lain, mari menghubungi kami.</small>
                        </div>
                        <div class="body widget newsletter">                        
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>