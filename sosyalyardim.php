<h1>Belediye Gıda ve Nakit Yardım Formu</h1>
<link rel="stylesheet" href="yan.css">
<hr><h1 class=".blink">T.C. MAMAK BELEDİYESİ DAİMA YANINIZDA</h1>
<div align ="center">
<img src="tclogo.png" alt="LOGO" width="200" height="100" >
<hr>T.C. MAMAK BELEDİYESİ DAİMA YANINIZDA</HR>
</div>
<form action="belediyeform.php" method="post" enctype="multipart/form-data">
<h3>İsim ve Soyisim Giriniz</h3>
<input type="text" name="name" required>
<h3>T.C Kimlik Numarası Giriniz</h3>
<input type="number" name="tcno" size="10" required>
<h3>Telefon Numarası</h3>
<input type="tel" name="telno" placeholder="05xxxxxxxxx" required>
<h3>Aylık gelirinizi giriniz</h3>
<input type="number" name="gelir" required>
<h3>Mahalle / Cadde / Sokak / Bina No Cinsinden Adresinizi Giriniz</h3>
<textarea id="adress" name="adress" rows="4" cols="50" placeholder="Örnek Türközü Mahallesi 396.Cadde No:40/5">
  </textarea>
<h3>Oturduğunuz ev</h3>
<input type="radio" name="house" value="kira">
<label for="kira">Kira</label>
<input type="radio" name="house" value="sahibi">
<label for="sahibi">Kendimizin</label>
<input type="radio" name="house" value="miras">
<label for="miras">Miras Kaldı</label>
<h3>Doğalgaz/Elektrik/Su faturasının fotografını ekleyiniz.(Herhangi biri veya hepsi olabilir)</h3>
<input type="file" multiple = "multiple" name="secilenDosya[]" required><br>
<br>
<button>Başvuruyu Tamamla</button>
</form>