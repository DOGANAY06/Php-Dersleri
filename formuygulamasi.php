<form action="goturapp.php" method="POST">

Adınız Soyadınız(Gerekli): 
<input type="text" name="adsoyad"><br>
Şifreniz(Gerekli):
<input type="password" name="sifre"><br>
Şifrenizi Tekrar Giriniz(Gerekli):
<input type="password" name="sifreTekrar"><br>
Şehir:
<select name="sehir" id="">
<option value="ankara-06">Ankara</option>
<option value="izmir-35">İzmir</option>
<option value="istanbul-34">İstanbul</option>
</select><br>
Cinsiyetiniz(Gerekli):
ERKEK:<input type="radio" name="cinsiyet" value="erkek">
KADIN:<input type="radio" name="cinsiyet" value="kız">
<br>
Hobileriniz:
<input type="checkbox" name="hobi[]" value="Kitap Okumak">Kitap Okuma <br>
<input type="checkbox" name="hobi[]" value="Yüzme">Yüzme <br>
<input type="checkbox" name="hobi[]" value="Bisiklete Binme">Bisiklete Binme<br>
<input type="checkbox" name="hobi[]" id="Araba Sürme">Araba Sürme<br>
Ek bilgiler:
<textarea name="ekbilgiler" cols="30" rows="10"></textarea>
<br>

<button>Gönder </button>

</form>