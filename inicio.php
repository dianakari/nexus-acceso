  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Inicio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <a href="#" class="navbar-brand">NEXUS</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">

        <div class="navbar-nav ml-auto">
          <a href="#" class="nav-item nav-link"><i class="fas fa-user-edit"></i>Inscripción</a>
          <a href="#" class="nav-item nav-link"><i class="fas fa-cog"></i>Configuración</a>
          <a href="#" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
          
        </div>
      </div>
    </nav>

    <div class="container"><br><br><br>
      <div class="row">
        <img src="imagenes/Nexus.jpeg" width="25%">
      </div>
      <div class="row text-center">
        <div class="col-md-4"><br><br>
          <select id="sector" class="form-control">
            <option>Seleccione Sector...</option>
            <option>Comercio</option>
            <option>Servicios</option>
            <option>Agricultura</option>
            <option>Ganadería</option>
            <option>Pesca</option>
            <option>Minería</option>
            <option>Manufactura</option>
            <option>Artesanía</option>
            <option>Industria</option>
            <option>Energía</option>
            <option>Transporte</option>
          </select><br>
          <select id="municipio" class="form-control">
            <option value="0" selected="selected">Seleccione Municipio...</option><option value="001">ACAJETE</option><option value="002">ACATENO</option><option value="003">ACATLÁN</option><option value="004">ACATZINGO</option><option value="005">ACTEOPAN</option><option value="006">AHUACATLÁN</option><option value="007">AHUATLÁN</option><option value="008">AHUAZOTEPEC</option><option value="010">AJALPAN</option><option value="011">ALBINO ZERTUCHE</option><option value="012">ALJOJUCA</option><option value="013">ALTEPEXI</option><option value="014">AMIXTLÁN</option><option value="015">AMOZOC</option><option value="016">AQUIXTLA</option><option value="017">ATEMPAN</option><option value="018">ATEXCAL</option><option value="080">ATLEQUIZAYAN</option><option value="019">ATLIXCO</option><option value="022">ATZITZIHUACÁN</option><option value="023">ATZITZINTLA</option><option value="024">AXUTLA</option><option value="025">AYOTOXCO DE GUERRERO</option><option value="026">CALPAN</option><option value="027">CALTEPEC</option><option value="028">CAMOCUAUTLA</option><option value="029">CAXHUACAN</option><option value="099">CAÑADA MORELOS</option><option value="045">CHALCHICOMULA DE SESMA</option><option value="046">CHAPULCO</option><option value="047">CHIAUTLA</option><option value="048">CHIAUTZINGO</option><option value="050">CHICHIQUILA</option><option value="049">CHICONCUAUTLA</option><option value="051">CHIETLA</option><option value="053">CHIGNAHUAPAN</option><option value="054">CHIGNAUTLA</option><option value="055">CHILA</option><option value="056">CHILA DE LA SAL</option><option value="058">CHILCHOTLA</option><option value="030">COATEPEC</option><option value="031">COATZINGO</option><option value="034">CORONANGO</option><option value="035">COXCATLÁN</option><option value="036">COYOMEAPAN</option><option value="039">CUAUTEMPAN</option><option value="040">CUAUTINCHÁN</option><option value="041">CUAUTLANCINGO</option><option value="042">CUAYUCA DE ANDRADE</option><option value="043">CUETZALAN DEL PROGRESO</option><option value="044">CUYOACO</option><option value="060">DOMINGO ARENAS</option><option value="061">ELOXOCHITLÁN</option><option value="063">ESPERANZA</option><option value="065">GENERAL FELIPE ÁNGELES</option><option value="066">GUADALUPE</option><option value="067">GUADALUPE VICTORIA</option><option value="068">HERMENEGILDO GALEANA</option><option value="057">HONEY</option><option value="069">HUAQUECHULA</option><option value="070">HUATLATLAUCA</option><option value="071">HUAUCHINANGO</option><option value="072">HUEHUETLA</option><option value="073">HUEHUETLÁN EL CHICO</option><option value="150">HUEHUETLÁN EL GRANDE</option><option value="074">HUEJOTZINGO</option><option value="075">HUEYAPAN</option><option value="076">HUEYTAMALCO</option><option value="077">HUEYTLALPAN</option><option value="078">HUITZILAN DE SERDÁN</option><option value="081">IXCAMILPA DE GUERRERO</option><option value="082">IXCAQUIXTLA</option><option value="083">IXTACAMAXTITLÁN</option><option value="084">IXTEPEC</option><option value="085">IZÚCAR DE MATAMOROS</option><option value="087">JOLALPAN</option><option value="088">JONOTLA</option><option value="089">JOPALA</option><option value="090">JUAN C. BONILLA</option><option value="092">JUAN N. MÉNDEZ</option><option value="093">LAFRAGUA</option><option value="094">LIBRES</option><option value="118">LOS REYES DE JUÁREZ</option><option value="096">MAZAPILTEPEC DE JUÁREZ</option><option value="100">NAUPAN</option><option value="101">NAUZONTLA</option><option value="102">NEALTICAN</option><option value="103">NICOLÁS BRAVO</option><option value="104">NOPALUCAN</option><option value="105">OCOTEPEC</option><option value="106">OCOYUCAN</option><option value="107">OLINTLA</option><option value="109">PAHUATLÁN</option><option value="110">PALMAR DE BRAVO</option><option value="113">PIAXTLA</option><option value="114">PUEBLA</option><option value="115">QUECHOLAC</option><option value="116">QUIMIXTLÁN</option><option value="117">RAFAEL LARA GRAJALES</option><option value="119">SAN ANDRÉS CHOLULA</option><option value="120">SAN ANTONIO CAÑADA</option><option value="121">SAN DIEGO LA MESA TOCHIMILTZINGO</option><option value="122">SAN FELIPE TEOTLALCINGO</option><option value="123">SAN FELIPE TEPATLÁN</option><option value="124">SAN GABRIEL CHILAC</option><option value="127">SAN JERÓNIMO XAYACATLÁN</option><option value="128">SAN JOSÉ CHIAPA</option><option value="129">SAN JOSÉ MIAHUATLÁN</option><option value="130">SAN JUAN ATENCO</option><option value="132">SAN MARTÍN TEXMELUCAN</option><option value="134">SAN MATÍAS TLALANCALECA</option><option value="135">SAN MIGUEL IXITLÁN</option><option value="136">SAN MIGUEL XOXTLA</option><option value="137">SAN NICOLÁS BUENOS AIRES</option><option value="138">SAN NICOLÁS DE LOS RANCHOS</option><option value="140">SAN PEDRO CHOLULA</option><option value="142">SAN SALVADOR EL SECO</option><option value="143">SAN SALVADOR EL VERDE</option><option value="145">SAN SEBASTIÁN TLACOTEPEC</option><option value="146">SANTA CATARINA TLALTEMPAN</option><option value="147">SANTA INÉS AHUATEMPAN</option><option value="149">SANTIAGO MIAHUATLÁN</option><option value="152">SOLTEPEC</option><option value="153">TECALI DE HERRERA</option><option value="154">TECAMACHALCO</option><option value="155">TECOMATLÁN</option><option value="156">TEHUACÁN</option><option value="157">TEHUITZINGO</option><option value="158">TENAMPULCO</option><option value="159">TEOPANTLÁN</option><option value="161">TEPANCO DE LÓPEZ</option><option value="162">TEPANGO DE RODRÍGUEZ</option><option value="163">TEPATLAXCO DE HIDALGO</option><option value="164">TEPEACA</option><option value="165">TEPEMAXALCO</option><option value="167">TEPETZINTLA</option><option value="168">TEPEXCO</option><option value="169">TEPEXI DE RODRÍGUEZ</option><option value="170">TEPEYAHUALCO</option><option value="172">TETELA DE OCAMPO</option><option value="174">TEZIUTLÁN</option><option value="176">TILAPA</option><option value="179">TLACHICHUCA</option><option value="177">TLACOTEPEC DE BENITO JUÁREZ</option><option value="178">TLACUILOTEPEC</option><option value="180">TLAHUAPAN</option><option value="181">TLALTENANGO</option><option value="183">TLAOLA</option><option value="184">TLAPACOYA</option><option value="186">TLATLAUQUITEPEC</option><option value="187">TLAXCO</option><option value="188">TOCHIMILCO</option><option value="191">TULCINGO</option><option value="192">TUZAMAPAN DE GALEANA</option><option value="193">TZICATLACOYAN</option><option value="195">VICENTE GUERRERO</option><option value="197">XICOTEPEC</option><option value="199">XIUTETELCO</option><option value="200">XOCHIAPULCO</option><option value="201">XOCHILTEPEC</option><option value="202">XOCHITLÁN DE VICENTE SUÁREZ</option><option value="206">ZACAPALA</option><option value="207">ZACAPOAXTLA</option><option value="208">ZACATLÁN</option><option value="209">ZAPOTITLÁN</option><option value="210">ZAPOTITLÁN DE MÉNDEZ</option><option value="211">ZARAGOZA</option><option value="212">ZAUTLA</option><option value="213">ZIHUATEUTLA</option><option value="214">ZINACATEPEC</option><option value="215">ZONGOZOTLA</option><option value="216">ZOQUIAPAN</option><option value="217">ZOQUITLÁN</option></select>
          </select><br>
          <input type="text" name="actividad" class="form-control"><br>
          <i class="fas fa-search" onclick="location.href='busqueda.php'"></i>
        </div>
        <div class="col-md-8">
          <div class="jumbotron">
            <h1 class="display-4">Bienvenido</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <section class="container my-5">
          <div class="row">
            <div class="col-md-12">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header bg-info" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Sector Primario
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <input type="checkbox" name=""> Agricultura<br>
                      <input type="checkbox" name=""> Ganadería<br>
                      <input type="checkbox" name=""> Pesca<br>
                      <input type="checkbox" name=""> Minería<br>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-info" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Sector Secundario
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <input type="checkbox" name=""> Manufactura<br>
                      <input type="checkbox" name=""> Artesanía<br>
                      <input type="checkbox" name=""> Industria<br>
                      <input type="checkbox" name=""> Energía<br>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-info" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Sector Terciario
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <input type="checkbox" name=""> Comercio<br>
                      <input type="checkbox" name=""> Servicios<br>
                      <input type="checkbox" name=""> Transporte
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js./bootstrap.min.js"></script>
  </body>
  </html>