<?php
  $pagename = "Tchad keyboard";
  $pagetitle = "Tchad keyboard layout";
  $pagestyle = <<<END
  h1,h2,h3,p {font-family: Charis SIL;}
  p.footnote {font-family: Charis SIL;font-size: small;}
  table {border-collapse: collapse;}
  td {border: 1px solid ;font-family: Charis SIL;text-align: center;}
  td.heading {border: 1px solid ;font-family: Charis SIL;text-align: center;font-weight: bold;padding-left: 8pt;padding-right: 8pt;}
  td.phonetic {border: 1px solid ;font-family: Charis SIL;text-align: center;background-color: silver;}
  td.diacritic {border: 1px solid ;font-family: Charis SIL;text-align: left;padding-left: 10pt;}
  li {font-family: Charis SIL;}
END;
  require_once('header.php');

?>
<p>This document describes the use of the Keyman keyboard designed for typing Chadian languages with a Unicode font.</p>

<p>There are two basic principles to use this keyboard:</p>

<ol>
  <li>Type special characters with a semicolon (;) followed by another character.</li>
  <li>Type diacritics as a special keystroke after the character to be modified.</li>
</ol>

<p>You may combine these principles to produce diacritics on special characters.</p>

<p>Type special characters as follows: (Shaded characters are intended to be used phonetically, not orthographically in Chadian languages.)</p>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading">type:</td>
      <td class="heading">to get:</td>
      <td class="heading">type:</td>
      <td class="heading">to get:</td>
      <td class="heading">type:</td>
      <td class="heading">to get:</td>
      <td class="heading">type:</td>
      <td class="heading">to get:</td>
    </tr>
    <tr>
      <td>' '</td>
      <td colspan="3">&#x02BC; (glottal stop character)</td>
      <td>;m</td>
      <td class="phonetic">&#626;</td>
      <td>;M</td>
      <td class="phonetic">&#413;</td>
    </tr>
    <tr>
       <td>;'</td>
      <td colspan="3">&#42892; (saltillo: straight glottal)</td>
      <td>;n</td>
      <td>&#331;</td>
      <td>;N</td>
      <td>&#330;</td>
    </tr>
    <tr>
      <td>;a</td>
      <td>æ<a href="#fn1">†</a></td>
      <td>;A</td>
      <td>Æ<a href="#fn1">†</a></td>
      <td>;o</td>
      <td>&#596;</td>
      <td>;O</td>
      <td>&#390;</td>
    </tr>
    <tr>
     <td>;b</td>
      <td>&#595;</td>
      <td>;B</td>
      <td>&#385;</td>
      <td>;p</td>
      <td>œ<a href="#fn1">†</a></td>
      <td>;P</td>
      <td>Œ<a href="#fn1">†</a></td>
    </tr>
    <tr>
      <td>;c</td>
      <td>ç<a href="#fn1">†</a></td>
      <td>;C</td>
      <td>Ç<a href="#fn1">†</a></td>
      <td>;q</td>
      <td class="phonetic">&#641;</td>
      <td>;Q</td>
      <td class="phonetic">&#x0256;</td>
    </tr>
    <tr>
      <td>;d</td>
      <td>&#599;</td>
      <td>;D</td>
      <td>&#394;</td>
      <td>;r</td>
      <td class="phonetic">&#638;</td>
      <td>;R</td>
      <td class="phonetic">&#637;</td>
    </tr>
    <tr>
      <td>;e</td>
      <td>&#603;</td>
      <td>;E</td>
      <td>&#400;</td>
      <td>;s</td>
      <td class="phonetic">&#643;</td>
      <td>;S</td>
      <td class="phonetic">ß</td>
    </tr>
    <tr>
      <td>;f</td>
      <td>&#601;</td>
      <td>;F</td>
      <td>&#399;</td>
      <td>;t</td>
      <td class="phonetic">&#x0288;</td>
      <td>;T</td>
      <td class="phonetic">&#x03B8;</td>
    </tr>
    <tr>
      <td>;g</td>
      <td class="phonetic">&#611;</td>
      <td>;G</td>
      <td>&#x018E;</td>
      <td>;u</td>
      <td class="phonetic">&#650;</td>
      <td>;U</td>
      <td class="phonetic">ø</td>
    </tr>
    <tr>
      <td>;h</td>
      <td>&#614;</td>
      <td>;H</td>
      <td>&#xA7AA;</td>
      <td>;v</td>
      <td class="phonetic">&#x2C71;</td>
      <td>;V</td>
      <td class="phonetic">&#x028B;</td>
    </tr>
    <tr>
      <td>;i</td>
      <td>&#618;</td>
      <td>;I</td>
      <td>&#407;</td>
      <td>;x</td>
      <td class="phonetic">&#967;</td>
      <td>;X</td>
      <td>&#x0127;</td>
    </tr>
    <tr>
      <td>;j</td>
      <td class="phonetic">&#644;</td>
      <td>;J</td>
      <td class="phonetic">&#607;</td>
      <td>;y</td>
      <td>&#436;</td>
      <td>;Y</td>
      <td>&#435;</td>
    </tr>
    <tr>
      <td>;k</td>
      <td>&#616;</td>
      <td>;K</td>
      <td>&#407;</td>
      <td>;z</td>
      <td class="phonetic">&#658;</td>
      <td>;Z</td>
      <td class="phonetic">&#x00F0;</td>
    </tr>
    <tr>
      <td>;l</td>
      <td class="phonetic">&#620;</td>
      <td>;L</td>
      <td class="phonetic">&#622;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>

<p>Type diacritics<a style="" href="#fn2">‡</a> using the following keystrokes (after the character):</p>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="1" cellspacing="0">
  <tbody>
    <tr>
      <td class="heading" style="width: 100px;">type:</td>
      <td class="heading" style="width: 160px;">to
get:</td>
      <td class="heading" style="width: 100px;">type:</td>
      <td class="heading" style="width: 160px;">to
get:</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;[</td>
      <td class="diacritic">á &nbsp;&nbsp;acute (high)</td>
      <td class="diacritic">a &nbsp;&nbsp;[=</td>
      <td class="diacritic">a&#x1DC7; &nbsp;&nbsp;high-mid</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;]</td>
      <td class="diacritic">à &nbsp;&nbsp;grave (low)</td>
      <td class="diacritic">a &nbsp;&nbsp;]=</td>
      <td class="diacritic">a&#7621; &nbsp;&nbsp;low-mid</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;=</td>
      <td class="diacritic">&#257; &nbsp;&nbsp;macron (mid)</td>
      <td class="diacritic">a &nbsp;&nbsp;=[</td>
      <td class="diacritic">a&#7620; &nbsp;&nbsp;mid-high</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;^ or []</td>
      <td class="diacritic">â &nbsp;&nbsp;circumflex</td>
      <td class="diacritic">a &nbsp;&nbsp;=]</td>
      <td class="diacritic">a&#7622; &nbsp;&nbsp;mid-low</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;| or ][</td>
      <td class="diacritic">&#462; &nbsp;&nbsp;wedge</td>
      <td class="diacritic">a &nbsp;&nbsp;]]</td>
      <td class="diacritic">&#513; &nbsp;&nbsp;double-low</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;#</td>
      <td class="diacritic">ä &nbsp;&nbsp;umlaut</td>
      <td class="diacritic">a &nbsp;&nbsp;[[</td>
      <td class="diacritic">a&#779;&nbsp;&nbsp;double-high</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;~</td>
      <td class="diacritic">ã &nbsp;&nbsp;tilde</td>
      <td class="diacritic">a &nbsp;&nbsp;@</td>
      <td class="diacritic">&#7681; &nbsp;&nbsp;under-circle</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;_</td>
      <td class="diacritic">a&#816; &nbsp;&nbsp;under-tilde</td>
      <td class="diacritic">a &nbsp;&nbsp;%</td>
      <td class="diacritic">&#7841; &nbsp;&nbsp;under-dot</td>
    </tr>
    <tr>
      <td class="diacritic">a &nbsp;&nbsp;`</td>
      <td class="diacritic">a&#807; &nbsp;&nbsp;cedilla</td>
      <td class="diacritic">a &nbsp;&nbsp;$</td>
      <td class="diacritic">a&#809; &nbsp;&nbsp;syllabic</td>
    </tr>
  </tbody>
</table>
</div>

<p>Type diacritic keys themselves and other special characters as follows:</p>

<div align="center">
<table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="heading">type:</td>
<td class="heading">to get:</td>
<td class="heading">&nbsp;&nbsp;type:&nbsp;&nbsp;</td>
<td class="heading">to get:</td>
<td class="heading">type:</td>
<td class="heading">to get:</td>
<td class="heading">type:</td>
<td class="heading">to get:</td>
</tr>
<tr>
<td>;[</td>
<td>[</td>
<td>;~</td>
<td>~</td>
<td>;%</td>
<td>%</td>
<td>;;</td>
<td>;</td>
</tr>
<tr>
<td>;]</td>
<td>]</td>
<td>;_</td>
<td>_</td>
<td>;$</td>
<td>$<br>
<td>&amp;&amp;</td>
<td>&amp;</td>
</tr>
<tr>
<td>;=</td>
<td>=</td>
<td>;`</td>
<td>`</td>
<td>;$$</td>
<td>€</td>
<td>;:</td>
<td>&#720;</td>
</tr>
<tr>
<td>;^</td>
<td>^</td>
<td>;@</td>
<td>@</td>
<td>;$$$</td>
<td>£</td>
<td>;::</td>
<td>&#721;</td>
</td>
</tr>
<tr>
<td>;|</td>
<td>|</td>
<td>;@@</td>
<td>©</td>
<td>;?</td>
<td>&#x0294;</td>
<td>--</td>
<td>–</td>
</tr>
<tr>
<td>;#</td>
<td>#</td>
<td>;@@@</td>
<td>&#x2117;</td>
<td>;??</td>
<td>&#x0295;</td>
<td>---</td>
<td>—</td>
</tr>
<tr>
<td>;##</td>
<td>&#794;</td>
<td>;@@@@</td>
<td>®</td>
<td>;*</td>
<td>º</td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
</div>

<p>In addition, the semicolon followed by space gives a non-breaking space.</p>

<h2>Quotation Marks and Glottal Stop Characters:</h2>

<p>
When you type an apostrophe ( ' ), this keyboard produces a right single quotation mark ( ’ ), i.e. the character used for contractions in English and French. If you immediately type another apostrophe, you will get a “modifier letter apostrophe”. While this looks identical to the single quotation mark ( &#x02BC; ), it is considered a letter and not punctuation, and can be used as a glottal stop character in the middle of words without causing any unwanted word-breaking issues. And if you type a semicolon apostrophe ( ;' ), you get something that looks like a heavy apostrophe ( &#xA78C; ) – a character called the “saltillo”. Both this character and the modifier letter apostrophe (typed with two consecutive apostrophes) are word-forming characters, and not punctuation. In Unicode, there is a difference. Use one of these two options for the glottal stop character, i.e. as a part of the word. For quotation marks as punctuation, use the following guide:
</p>

<div align="center">
    <table style="border: medium none ; border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td class="heading">type:</td>
          <td class="heading">to get:</td>
          <td class="heading">type:</td>
          <td class="heading">to get:</td>
          <td class="heading">type:</td>
          <td class="heading">to get:</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>;{</td>
          <td>“</td>
          <td>&lt;&lt;</td>
          <td>«</td>
        </tr>
        <tr>
          <td>"</td>
          <td>"</td>
          <td>;{</td>
          <td>”</td>
          <td>&gt;&gt;</td>
          <td>»</td>
        </tr>
        <tr>
          <td>;"</td>
          <td>'</td>
          <td>;(</td>
          <td>‘</td>
          <td>;&lt;</td>
          <td>‹</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>;)</td>
          <td>’</td>
          <td>;&gt;</td>
          <td>›</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>'</td>
          <td>’</td>
          <td></td>
          <td></td>
        </tr>

      </tbody>
    </table>
</div>

<p>
You may use the “smart quotes” auto-correct feature in your editor. If you do, all of the straight apostrophes and double-quotes (in the left column of the table above) will be changed to curled quotes depending on the context. If you need to use straight apostrophes or straight double-quotes in your text, you must turn off the “smart quotes” feature. In this case, you can still type curled quotes, as shown in the middle column of the table above. The right column shows how to type French guillemets. If the language of your document is French, you may get these automatically by typing straight double-quotes if the “smart quotes” feature is on. Remember that typing a double apostrophe ( ' ' ) or a semicolon apostrophe ( ;' ) does not give you punctuation, but a word-forming character to be used as a glottal in Chadian languages.
</p>

<h2>Alternate Special Character Key to Avoid Unwanted Non-breaking Spaces:</h2>

<p>
If you are using LibreOffice or Microsoft Word and have set the language of your document to French, a non-breaking space is added before certain punctuation marks ( ? ! ; : ). So words with special characters typed with ( ; ) will contain unwanted spaces. To get around this, a second special character key ( &amp; ) has been provided which may be used interchangeably with the semicolon. Or you may choose to set the language of your text to a different language (or to “no proofing”) until you have finished typing special characters, and then change it back to French.
</p>

<h2>Fonts</h2>
  <p>Make sure you have a Unicode font selected (e.g. Charis SIL, Doulos SIL, Andika, Gentium, Times New Roman, etc.) to type special characters.</p>

<hr align="left" size="1" width="33%">
<p class="footnote"><a name="fn1">†</a> These characters are used orthographically in French, but not in Chadian languages.</p>

<p class="footnote"><a name="fn2">‡</a> Chadian orthographies should use diacritics sparingly where possible, but some languages use tone characters (&#9676;&#768; &#9676;&#769; &#9676;&#772; &#9676;&#770;), ATR (&#9676;&#776;) and the under-tilde (&#9676;&#816;) for nasalization and palatals (n&#816; r&#816;).</p>
