<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/help/bootstrap.css">
<style>
  @font-face {
    font-family: as;
    src: url(../../public/al-quran-ali-font/AlQuranAli-L3A83.ttf);
  }
  @font-face {
    font-family: aa;
    src: url(../../public/al-quran-ali-font/QuranSurah02-d9lVZ.ttf);
  }
.font{
  font-family: as;
  font-weight: 800;
  font-size: 50px !important;
  text-align: center;
  color: #000309;
  margin-top: 80px !important;
}
.div{
  text-align: center;
  margin-top: 20px;
}
body{
  background-color: #009688;
}
</style>
  <title>Al Quran karim</title>
</head>
<body>
  <img src="../../public/images/images.png" alt="">
    <?
      $a = array(" الَّذِیْ خَلَقَ الْمَوْتَ وَ الْحَیٰوةَ لِیَبْلُوَكُمْ اَیُّكُمْ اَحْسَنُ عَمَلًاؕ-وَ هُوَ الْعَزِیْزُ الْغَفُوْرُ(2) ","الَّذِیْ خَلَقَ سَبْعَ سَمٰوٰتٍ طِبَاقًاؕ-مَا تَرٰى فِیْ خَلْقِ الرَّحْمٰنِ مِنْ تَفٰوُتٍؕ-فَارْجِـعِ الْبَصَرَۙ-هَلْ تَرٰى مِنْ فُطُوْرٍ(3) "," ثُمَّ ارْجِـعِ الْبَصَرَ كَرَّتَیْنِ یَنْقَلِبْ اِلَیْكَ الْبَصَرُ خَاسِئًا وَّ هُوَ حَسِیْرٌ(4) "," وَ لَقَدْ زَیَّنَّا السَّمَآءَ الدُّنْیَا بِمَصَابِیْحَ وَ جَعَلْنٰهَا رُجُوْمًا لِّلشَّیٰطِیْنِ وَ اَعْتَدْنَا لَهُمْ عَذَابَ السَّعِیْرِ(5) "," وَ لِلَّذِیْنَ كَفَرُوْا بِرَبِّهِمْ عَذَابُ جَهَنَّمَؕ-وَ بِئْسَ الْمَصِیْرُ(6) ","اِذَاۤ اُلْقُوْا فِیْهَا سَمِعُوْا لَهَا شَهِیْقًا وَّ هِیَ تَفُوْرُ(7)"," تَكَادُ تَمَیَّزُ مِنَ الْغَیْظِؕ-كُلَّمَاۤ اُلْقِیَ فِیْهَا فَوْجٌ سَاَلَهُمْ خَزَنَتُهَاۤ اَلَمْ یَاْتِكُمْ نَذِیْرٌ(8)"," قَالُوْا بَلٰى قَدْ جَآءَنَا نَذِیْرٌ ﳔ فَكَذَّبْنَا وَ قُلْنَا مَا نَزَّلَ اللّٰهُ مِنْ شَیْءٍ ۚۖ-اِنْ اَنْتُمْ اِلَّا فِیْ ضَلٰلٍ كَبِیْرٍ(9)"," وَ قَالُوْا لَوْ كُنَّا نَسْمَعُ اَوْ نَعْقِلُ مَا كُنَّا فِیْۤ اَصْحٰبِ السَّعِیْرِ(10)"," فَاعْتَرَفُوْا بِذَنْۢبِهِمْۚ-فَسُحْقًا لِّاَصْحٰبِ السَّعِیْرِ(11)"," اِنَّ الَّذِیْنَ یَخْشَوْنَ رَبَّهُمْ بِالْغَیْبِ لَهُمْ مَّغْفِرَةٌ وَّ اَجْرٌ كَبِیْرٌ(12)"," وَ اَسِرُّوْا قَوْلَكُمْ اَوِ اجْهَرُوْا بِهٖؕ-اِنَّهٗ عَلِیْمٌۢ بِذَاتِ الصُّدُوْرِ(13)"," اَلَا یَعْلَمُ مَنْ خَلَقَؕ-وَ هُوَ اللَّطِیْفُ الْخَبِیْرُ(14)","  مَّنَّاعٍ لِّلْخَیْرِ مُعْتَدٍ اَثِیْمٍ(12) ","عُتُلٍّۭ بَعْدَ ذٰلِكَ زَنِیْمٍ(13)","  اِنَّ لَكُمْ فِیْهِ لَمَا تَخَیَّرُوْنَ(38)"," فَهَلْ تَرٰى لَهُمْ مِّنْۢ بَاقِیَةٍ(8)","وَ انْشَقَّتِ السَّمَآءُ فَهِیَ یَوْمَىٕذٍ وَّاهِیَةٌ(16)"," وَ اَمَّا عَادٌ فَاُهْلِكُوْا بِرِیْحٍ صَرْصَرٍ عَاتِیَةٍ(6)"," اَمْ لَكُمْ كِتٰبٌ فِیْهِ تَدْرُسُوْنَ(37)"," اِنَّهُمْ یَرَوْنَهٗ بَعِیْدًا(6)","وَ جَمَعَ فَاَوْعٰى(18)","عَنِ الْیَمِیْنِ وَ عَنِ الشِّمَالِ عِزِیْنَ(37)"," قَالَ یٰقَوْمِ اِنِّیْ لَكُمْ نَذِیْرٌ مُّبِیْنٌ(2)","ثُمَّ اِنِّیْۤ اَعْلَنْتُ لَهُمْ وَ اَسْرَرْتُ لَهُمْ اِسْرَارًا(9)","وَ قَدْ خَلَقَكُمْ اَطْوَارًا(14)"," وَ قَدْ اَضَلُّوْا كَثِیْرًا ﳛ وَ لَا تَزِدِ الظّٰلِمِیْنَ اِلَّا ضَلٰلًا(24)"," وَّ اَنَّهٗ تَعٰلٰى جَدُّ رَبِّنَا مَا اتَّخَذَ صَاحِبَةً وَّ لَا وَلَدًا(3)"," وَّ اَنَّهٗ تَعٰلٰى جَدُّ رَبِّنَا مَا اتَّخَذَ صَاحِبَةً وَّ لَا وَلَدًا(3)","لِّیَعْلَمَ اَنْ قَدْ اَبْلَغُوْا رِسٰلٰتِ رَبِّهِمْ وَ اَحَاطَ بِمَا لَدَیْهِمْ وَ اَحْصٰى كُلَّ شَیْءٍ عَدَدًا(28)"," اِنَّ لَكَ فِی النَّهَارِ سَبْحًا طَوِیْلًا(7)"," اِنَّ هٰذِهٖ تَذْكِرَةٌۚ-فَمَنْ شَآءَ اتَّخَذَ اِلٰى رَبِّهٖ سَبِیْلًا(19)"," وَ لِرَبِّكَ فَاصْبِرْ(7)"," ذَرْنِیْ وَ مَنْ خَلَقْتُ وَحِیْدًا(11)","فَقُتِلَ كَیْفَ قَدَّرَ(19)"," كُلُّ نَفْسٍۭ بِمَا كَسَبَتْ رَهِیْنَةٌ(38)"," فَاِذَا بَرِقَ الْبَصَرُ(7)"," لَا تُحَرِّكْ بِهٖ لِسَانَكَ لِتَعْجَلَ بِهٖ(16)","وَ الْتَفَّتِ السَّاقُ بِالسَّاقِ(29)"," اِلٰى رَبِّكَ یَوْمَىٕذِ-ﹰالْمَسَاقُ(30)",") اَیَحْسَبُ الْاِنْسَانُ اَنْ یُّتْرَكَ سُدًى(36)"," عَیْنًا یَّشْرَبُ بِهَا عِبَادُ اللّٰهِ یُفَجِّرُوْنَهَا تَفْجِیْرًا(6)","فَوَقٰىهُمُ اللّٰهُ شَرَّ ذٰلِكَ الْیَوْمِ وَ لَقّٰىهُمْ نَضْرَةً وَّ سُرُوْرًا(11)",") وَ یَطُوْفُ عَلَیْهِمْ وِلْدَانٌ مُّخَلَّدُوْنَۚ-اِذَا رَاَیْتَهُمْ حَسِبْتَهُمْ لُؤْلُؤًا مَّنْثُوْرًا(19)"," اِنَّمَا تُوْعَدُوْنَ لَوَاقِعٌ(7)","كَذٰلِكَ نَفْعَلُ بِالْمُجْرِمِیْنَ(18)","اِنْطَلِقُوْۤا اِلٰى ظِلٍّ ذِیْ ثَلٰثِ شُعَبٍ(30)","وَیْلٌ یَّوْمَىٕذٍ لِّلْمُكَذِّبِیْنَ(37)"," اَلَمْ نُهْلِكِ الْاَوَّلِیْنَ(16)","كَذٰلِكَ نَفْعَلُ بِالْمُجْرِمِیْنَ(18) "," فَالْفٰرِقٰتِ فَرْقًا(4)" ," وَ اِذَا السَّمَآءُ فُرِجَتْ(9) ","اِنَّمَا نُطْعِمُكُمْ لِوَجْهِ اللّٰهِ لَا نُرِیْدُ مِنْكُمْ جَزَآءً وَّ لَا شُكُوْرًا(9)","عَیْنًا یَّشْرَبُ بِهَا عِبَادُ اللّٰهِ یُفَجِّرُوْنَهَا تَفْجِیْرًا(6) "," وَ یَطُوْفُ عَلَیْهِمْ وِلْدَانٌ مُّخَلَّدُوْنَۚ-اِذَا رَاَیْتَهُمْ حَسِبْتَهُمْ لُؤْلُؤًا مَّنْثُوْرًا(19)","یَقُوْلُ الْاِنْسَانُ یَوْمَىٕذٍ اَیْنَ الْمَفَرُّ(10)"," یُنَبَّؤُا الْاِنْسَانُ یَوْمَىٕذٍۭ بِمَا قَدَّمَ وَ اَخَّرَ(13)"," اِلٰى رَبِّكَ یَوْمَىٕذِ ﹰالْمُسْتَقَرُّ(12)"," ثُمَّ اِنَّ عَلَیْنَا بَیَانَهٗ(19)","اِنَّ عَلَیْنَا جَمْعَهٗ وَ قُرْاٰنَهٗ(17)"," فَقُتِلَ كَیْفَ قَدَّرَ(19)" ," قُمْ فَاَنْذِرْ(2) وَ رَبَّكَ فَكَبِّرْ(3)"," قُمِ الَّیْلَ اِلَّا قَلِیْلًا(2) نِّصْفَهٗۤ اَوِ انْقُصْ مِنْهُ قَلِیْلًا(3)" ," اِنَّ لَكَ فِی النَّهَارِ سَبْحًا طَوِیْلًا(7)"," اِنَّ لَدَیْنَاۤ اَنْكَالًا وَّ جَحِیْمًا(12) "," فَكَیْفَ تَتَّقُوْنَ اِنْ كَفَرْتُمْ یَوْمًا یَّجْعَلُ الْوِلْدَانَ شِیْبَاﰳ(17)"," یَّهْدِیْۤ اِلَى الرُّشْدِ فَاٰمَنَّا بِهٖؕ-وَ لَنْ نُّشْرِكَ بِرَبِّنَاۤ اَحَدًا(2)"," وَّ اَنَّا مِنَّا الصّٰلِحُوْنَ وَ مِنَّا دُوْنَ ذٰلِكَؕ-كُنَّا طَرَآىٕقَ قِدَدًا(11)","وَّ اَنْ لَّوِ اسْتَقَامُوْا عَلَى الطَّرِیْقَةِ لَاَسْقَیْنٰهُمْ مَّآءً غَدَقًا(16) ","وَّ اَنَّهٗ لَمَّا قَامَ عَبْدُ اللّٰهِ یَدْعُوْهُ كَادُوْا یَكُوْنُوْنَ عَلَیْهِ لِبَدًا(19)","یَغْفِرْ لَكُمْ مِّنْ ذُنُوْبِكُمْ وَ یُؤَخِّرْكُمْ اِلٰۤى اَجَلٍ مُّسَمًّىؕ-اِنَّ اَجَلَ اللّٰهِ اِذَا جَآءَ لَا یُؤَخَّرُۘ-لَوْ كُنْتُمْ تَعْلَمُوْنَ(4)","یُّرْسِلِ السَّمَآءَ عَلَیْكُمْ مِّدْرَارًا(11)","وَ اللّٰهُ جَعَلَ لَكُمُ الْاَرْضَ بِسَاطًا(19)","لِّلْكٰفِرِیْنَ لَیْسَ لَهٗ دَافِعٌ(2)","وَ جَمَعَ فَاَوْعٰى(18) اِنَّ الْاِنْسَانَ خُلِقَ هَلُوْعًا(19)"," یُّبَصَّرُوْنَهُمْؕ-یَوَدُّ الْمُجْرِمُ لَوْ یَفْتَدِیْ مِنْ عَذَابِ یَوْمِىٕذٍۭ بِبَنِیْهِ(11)","وَ جَآءَ فِرْعَوْنُ وَ مَنْ قَبْلَهٗ وَ الْمُؤْتَفِكٰتُ بِالْخَاطِئَةِ(9)","فَاِذَا نُفِخَ فِی الصُّوْرِ نَفْخَةٌ وَّاحِدَةٌ(13)","فَاَمَّا مَنْ اُوْتِیَ كِتٰبَهٗ بِیَمِیْنِهٖۙ-فَیَقُوْلُ هَآؤُمُ اقْرَءُوْا كِتٰبِیَهْ(19)");
      $random=array_rand($a,2); 
      ?>
  <h2 class="font"><? echo $a[$random[0]]."<br>"; ?>
      
     
   
</h2>
<div class="div">
  <a href="" class="btn btn-success div">Random </a>
</div>
</body>
</html>
