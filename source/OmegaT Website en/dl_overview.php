<?php print "<?xml version=\"1.0\"?>" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, the free translation memory tool</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  
  <meta name="keywords" content="translation memory, TM, computer-aided translation, computer-assisted translation, CAT, GPL, open source" />

  
<link rel="stylesheet" type="text/css" href="./simple.css" />

</head>

<?php include '../config/versions.txt'; ?>

<body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>The free (GPL) translation memory tool</p>

</div>

<ul id="menu">

  <li><a href="omegat.html">Introducing OmegaT</a></li>

  <li><a href="requirements.html">Requirements</a></li>

  <li><a href="screenshots.html">Screenshots</a></li>

  <li><a href="downloads.html">Download OmegaT</a></li>

  <li><a href="documentation.php">Documentation</a></li>

  <li><a href="resources.html">Other OmegaT resources</a></li>

  <li><a href="3rd_party.html">Third-party software</a></li>

  <li><a href="contact_support.html">Contact and support</a></li>

  <li><a href="involved.html">OmegaT + You</a></li>

  <li><a href="reviews.html">Reviews</a></li>

  <li><a href="who_we_are.html">Who we are</a></li>

</ul>

<div id="content">
		
<h2>OmegaT downloads overview</h2>

<h3>Download links</h3>

<p>Links are provided below to the various versions of OmegaT. For more information, read on under "Detailed descriptions".</p>

<table>

<tr>

<td><b>Standard versions</b><br/>
(Currently version: 
<?php
echo $standard_name
?>)
</td>

<td>

<p>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Windows.exe/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Windows with JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Windows_without_JRE.exe/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Windows without JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Mac.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Mac OS X<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Linux.tar.bz2/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Linux with JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Without_JRE.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Cross-platform without JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Source.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Source code<?php echo $endlink ?><br/></p>

</td>

</tr>

<tr>

<td><b>Latest versions</b><br/>
(Currently version: 
<?php
echo $latest_name
?>)
</td>

</td>

<td>

<p>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Windows.exe/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Windows with JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Windows_without_JRE.exe/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Windows without JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Mac.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Mac OS X<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Linux.tar.bz2/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Linux with JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Without_JRE.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Cross-platform without JRE<?php echo $endlink ?><br/>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Source.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>Source code<?php echo $endlink ?><br/></p>

</td>

</tr>

<tr>

<td><b>Web Start versions</b></td>

<td>

<p><a
href="http://omegat.sourceforge.net/webstart/OmegaT.jnlp">Web Start Standard</a><br/>


<a
href="http://omegat.sourceforge.net/webstart-dev/OmegaT.jnlp">Web Start Latest</a><br/></p>

</td>

</tr>

<tr>

<td><b>Legacy versions</b></td>

<td><p><a href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Legacy/">Older, superseded versions</a></p></td>

</tr>

<tr>

<td><b>Trunk version</b></td>

<td><p>The <a href="http://omegat.svn.sourceforge.net/viewvc/omegat/trunk/?view=tar">/trunk</a> version is a cutting-edge, "alpha" version, still in development.</p></td>

</tr>

</table>


<h2>Detailed descriptions</h2>

<p>Note that the categories are not mutually exclusive. A version may be "Standard, without JRE, for Windows", or "Latest, with JRE, for Linux", etc.</p>

<h3>Standard version</h3>

<p>The Standard version has usually been in use for some time and is therefore proven. Its documentation, at least in English, is usually reasonably up to date. It will however lack some of the features of the "Latest" version.</p>

<h3>Latest version</h3>

<p>The Latest version is a more recent version than the Standard version and includes new features not present in the latter. The Latest version will usually be reasonably stable and usable, but may have some bugs. Documentation, particularly of new features, will be less comprehensive than that of the Standard version. Users who already have some experience with OmegaT often prefer the Latest version.</p>

<h3>Platform (operating system)</h3>

<p>Platform-specific versions of OmegaT are provided for Windows, Linux and Mac OS X. A platform-indpendent version is also available which will run on any operating system capable of running a suitable version of the Java Runtime Environment.</p>

<h3>With/without JRE</h3>

<p>In order to run, OmegaT requires&nbsp;the Java Runtime Environment (JRE) to be installed on your computer.</p>

<p>If you are confident that a suitable version of the JRE is already installed on your computer, you can download a version of OmegaT without the JRE. The download will be faster, and the installation will require less
space on your hard drive. In this case, do not select the Default version; select a different version (e.g. Standard or Latest), then select a version marked "Java not included".</p>

<p>If you install the OmegaT version even though the JRE is already installed on your computer, OmegaT's JRE will be installed separately and will not conflict with it. It is therefore always safe to install the version of OmegaT with JRE. If you are unsure whether or not you have a suitable version of the JRE, select a version with JRE (or the Default version). </p>

<p>Mac OS X users: the JRE is installed on Mac OS X by default; there is therefore no version for Mac OS X with the JRE.</p>

<p>Linux users: most Linux distributions are supplied with a Java Runtime Environment, but some open-source implementations do not work properly with OmegaT (although this may not be immediately apparent). If you are relatively new to Linux, we advise you to select an OmegaT version with the JRE included. More experienced Linux users may prefer to install the Oracle (formerly Sun) JRE at system level.
</p>

<h3>Web Start version</h3>

<p>The Web Start version offers an alternative means of installing OmegaT on your computer.</p>

<p>With this version, future updates will be installed automatically.</p>

<p>During installation, depending on your operating system, you may receive several security warnings.<br/> 
The certificate is self-signed by "Didier Briel".</p>

<p>The permissions you give to this version (which may be described as "unrestricted access to the computer") are no different from the permissions you assign to the local version, i.e., an access to the hard drive of your computer.</p>

<p>In order to install the Web start version, you must already have Java version 1.3 or later installed on your computer.</p>

<p>Privacy information: OmegaT Java Web Start does not save any of your information to OmegaT's web servers. The application runs on your machine. Your documents and translation memories remain on your computer, and the OmegaT project will have no access to your work or information.</p>

<h3>Legacy versions</h3>

<p>Legacy versions are older versions that have been superseded. For most users, these are not of interest. However, some users may face restrictions (imposed by their operating systems or Java version) that may result in a preference for an older version.</p>

<h3>Trunk version</h3>

<p>The /trunk (alpha) version reflects the very latest state of development. It is recommended for serious developers and testers only. It can also be obtained using the subversion command:</p>

<p>svn co https://omegat.svn.sourceforge.net/svnroot/omegat/trunk omegat</p>

<h3>Source code packages</h3>

<p>Source code packages are not required by users and are intended for developers only. They can be found in the folders of the corresponding compiled versions.</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net Logo" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../images/css.png" alt="Valid XHTML" /></a>
	</div>

</div>


</body>

</html>
