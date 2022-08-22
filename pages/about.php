<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

     <?php 
    $destination = $obj->select('tbl_destination');
     ?>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-5">
                    <h4>भाडा सुचि</h4>


            <?php if($destination) { ?>
                <table class="table table-bordered table-secondary text-center">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Place (from KTM)</th>
                    <th>Cost</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($destination as $key=>$value) : ?>
                <tr>
                    <td><?=++$key;?></td>
                     <td><?=$value['place'];?></td>
                     <td>Rs.<?=$value['cost'];?></td>
                 </tr>
                 <?php endforeach ;?>
                 </tbody>
        </table>
        <?php } ?>
          </div>
          <style>
          @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap');
            .content li,em{
                font-family: mukta,sans-serif;
                font-size: 1.2rem;
                line-height: 1.7;

            }
          </style>

                <div class="col-sm-7 pt-4 pl-4 pt-lg-0 content">
                    <h4 style="padding: 1rem;border: 1px solid #c7c7c7;border-left-width: 4px;border-left-color: orange;">सर्त तथा नियमहरु</h4>
                    
                
                    <ul style="list-style-type: circle;margin-left: 1.5rem;">
                        <li>

                        सेवा लिने व्यक्तिले प्रविष्ट गरेका विवरणहरु यथार्थ र सक्कली हुनुपर्दछ। 
                        </li>

                        <li> 
                        बुकिंग पुष्टि भएपछि , सेवालाई अघाडि बढाइनेछ ।
                        </li>

                        <li> 
                        बुकिङ्गको सिलसिलामा कुनै समस्या आए फोन कल मार्फत पनि बुकिङ्ग गर्न वा बुकिङ्गबारे जानकारी लिन सकिनेछ। 
                        </li>

                        <li>
                        तपाईले पठाउनुभएका विवरण तथा जानकारीहरु गोप्य राखिनेछ। 
                        </li>

                        <li> 
                        कुनैपनि गैरकानूनी उद्देश्यका लागि सेवा वा साइट प्रयोग गर्न पाइने छैन। अन्यथा व्यक्ति स्वयंम यसको जिम्मेवार हुनुपर्नेछ। 
                        </li>

                        <li>
                        यात्राको दौरान आइपर्ने  बाह्य समस्याहरु जस्तै: ट्राफिक जाम, सवारी साधन बिग्रनु, प्राकृतिक प्रकोप इत्यादिबाट हुने असरहरुको जिम्मेवारी आफैले लिनुपर्नेछ। 
                        </li>

                        <li>
                        कन्फर्म भैसकेको बुकिङ्ग कुनै खास कारण बिना रद्द नगरिदिनुहोला।  गर्नै परे बुकिङ्ग गरेको २४ घण्टा भित्र जानकारी गराउनुहाेला । 
                        </li>
                    </ul>
                    <em>सर्तहरु लागू हुनेछन् ।</em>
                </div>
                
            </div>

        </div>
    </section><!-- End About Section -->

    </div>