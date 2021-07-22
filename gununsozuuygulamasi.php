<?php
#günün sözü uygulaması
$gun = date("j");

$sozler =array(
    "",
    "Hayat çok zalim bir öğretmendir. Önce sınav yapar sonra dersi verir.",
    "Uzağımda ama her gece kalbimde uyuyor",
    "Zihin fukara olunca akıl ukala olurmuş.",
    "Manzaraya talipsen, yokuşunda yorulmayı göze alacaksın.",
    "Her şey göründüğü gibi olsaydı, eline aldığın deniz suyu mavi olurdur.",
    "Aşk çok kısa ama unutması çok zor.",
    "",
    "",
    "Yalnız kalma özgürlüğü sarhoş edicidir."
);

echo $sozler[$gun];

?>