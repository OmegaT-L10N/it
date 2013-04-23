<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, the free translation memory tool</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  
  <meta name="keywords" content="translation memory, TM, computer-aided translation, computer-assisted translation, CAT, GPL, open source" />

  
<link rel="stylesheet" type="text/css" href="../../config/howto.css" />

</head>

<?php include '../../config/versions.txt'; ?>

<body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>The free (GPL) translation memory tool</p>

</div>

<div id="content">

<h2>OmegaT HowTo: Using the OmegaT tokenizer</h2>

<p>The OmegaT tokenizer is a plugin for OmegaT. It provides better fuzzy and glossary matches in OmegaT, by computing the roots ("stemming") of the source words. For example, it will recognize inflected words in texts and display the corresponding glossary entry, even if the glossary entry contains only the uninflected form of a word.</p>

<h3>Preparation</h3>

<p>Before using the tokenizer with OmegaT, you must first ensure that your version of OmegaT is suitable and prepared for use with it.</p>

<p><strong>Webstart version of OmegaT</strong>: the tokenizer is not compatible with the Webstart version of OmegaT. If you wish to use the tokenizer, install the standard version of OmegaT (latest beta version) for your system.</p>

<p><strong>OmegaT version 2.1.0 and older</strong>: the current tokenizer is not compatible with these versions. (The tokenizer can be used with versions 2.0.x and 2.1.0, but this requires both a different version of the tokenizer, and a different installation procedure.) Users are advised to upgrade to the latest beta version of OmegaT.</p>

<p><strong>Windows versions of OmegaT</strong>: in order for OmegaT (any version) to be used with the tokenizer, it must be launched from a launch script file. A launch script file is not supplied with the Windows OmegaT versions. If you are using the Windows version with JRE, download the file <a href="../../resources/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a>; If you are using the Windows version without JRE, download the file <a href="../../resources/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a>. After downloading, place the file in the main OmegaT folder (the folder containing the file OmegaT.jar).</p>

<p><strong>Platform-neutral version (on Windows)</strong>: locate your OmegaT launch script file (OmegaT.bat).</p>

<p><strong>Linux versions/systems</strong>: locate your OmegaT launch script file (OmegaT or OmegaT.sh).</p>

<p>Check that OmegaT is launched when you execute the launch script file:<br/>
- On Linux, on the command line<br/>
- On Windows, by clicking on the launch script file</p>


<h3>Installing the tokenizer</h3>

<p>After preparing for installation (see above), install the tokenizer as follows:</p>

<p>1. Download the 
<?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>tokenizer zip package (for OmegaT version 2.1.1 and later)<?php echo $endlink ?>.</p>

<p>2. Unzip the files from the tokenizer zip package.</p>

<p>3. In the main OmegaT program folder (i.e. the folder containing the file OmegaT.jar), create a sub-folder called "plugins", if a sub-folder with this name does not already exist. Copy the files that you have unzipped from the tokenizer package directly into this sub-folder.</p>

<p>4. Open your launch script file in a text editor. Windows users (in particular): do <strong>not</strong> simply click on this file. Instead, launch a text editor (such as Notepad or Wordpad), then open the launch script file with File > Open. You may also be able to right-click with the mouse on the file, then select a text editor in which to open it.</p>

<p>5. The launch file script contains the OmegaT launch command. The basic form of this command is:</p>

<p>java -jar OmegaT.jar</p>

<p>Depending upon your system configuration, the launch command may be slightly different.</p>

<p>6. Choose a tokenizer from the following list, according to your <strong>source</strong> language:</p>

<p>org.omegat.plugins.tokenizer.LuceneArabicTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneBrazilianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneChineseTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneCJKTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneCzechTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneDutchTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneFrenchTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneGermanTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneGreekTokenizer<br/>
org.omegat.plugins.tokenizer.LucenePersianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneSmartChineseTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneRussianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneThaiTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballDanishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballDutchTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballEnglishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballFinnishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballFrenchTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballGerman2Tokenizer<br/>
org.omegat.plugins.tokenizer.SnowballGermanTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballHungarianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballItalianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballNorwegianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballPorterTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballPortugueseTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballRomanianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballRussianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballSpanishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballSwedishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Add the argument --ITokenizer= followed by the full name of this tokenizer (by copying the entire line, inserting a space) to the end of the launch command in your OmegaT launch script file.</p>

<p>For example, to use the English tokenizer (when translating from English), your launch command might now be:</p>

<p>java -jar OmegaT.jar %*
--ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>Or if you are translating from Turkish, it might now be:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Important: this whole command must appear on one line (even if it appears to be on two lines in the display in which you are reading this).</p>

<p>7. Execute this file, and OmegaT should now launch with the tokenizer function. To test, check whether glossary entries are displayed even when the current OmegaT segment contains a term in an inflected form from that in the glossary.</p>

<p>8. If you wish to use different tokenizers because you translate from more than one language, create a separate OmegaT launch script file for each tokenizer you wish to use. Name the launch script files appropriately, for example "OmegaT-EN.bat" for the launch script file containing the command with the English tokenizer and "OmegaT-TR.bat" for the launch script file containing the command with the Turkish tokenizer.</p>

<p>9. In some cases, you may find that the source-language tokenizer interferes with the target-language spelling checker. You can eliminate this problem by specifying a tokenizer for the target language as well (where available), with the argument --ITokenizerTarget=.</p>

<p>For instance, if you are translating from Chinese to Dutch, try:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. After creating a launch script as described above, you can configure your system so that OmegaT is launched more conveniently, for example by creating a shortcut. To create a shortcut in Windows:</p>

<p>Right-click on the launch script (OmegaT.bat), then keeping the right mouse button depressed, drag the script to a convenient location, such as your desktop. When you release the right click, a dialog opens with a number of options. Choose "Create Shortcuts Here".</p>
<p>Alternatively, right-click on the launch script. Select: "Send to", then select "Desktop (create shortcut)".</p>
<p>After creating and testing the shortcut, you can add it to the Start menu by dragging it there.</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net Logo" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML" /></a>
	</div>

</div>

</body></html>
