<?php echo '<?xml version="1.0" encoding="iso-8859-1"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="https://xoc.dk/older/style/autumish.css" />
    <title>
      Camillog
    </title>
  </head>
  <body>
<!-- LEFTSIDE CONTENT --> 
  
<div id="left">
    <h6>
      Navigate:
    </h6>
    <p class="eleven">
      <a href="https://xoc.dk/older/oldcamillog.php">Home</a> <br /> 
      <a href="https://xoc.dk/older/about.php">About</a> <br /> 

      <a href="https://xoc.dk/older/backthen/archives.php">Archives</a> <br />  
      <a href="https://xoc.dk/older/books/">Book reviews</a> <br /> 
       
      <a href="https://xoc.dk/older/images/photos">Photos</a> <br /> 
<!--      <a href="#"onclick="To_do=window.open('https://xoc.dk/older/misc/stuff/todo.php','To-do','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=500,height=600'); return false;">To do list</a> <br /> -->
      <a href="https://xoc.dk/older/oldxoc/" title="In Danish">The old site</a> 
    </p> 
    <h6>
      Favorite weblogs:
    </h6>
    <p class="eleven">
      <a href="http://www.androgynousmind.com/">Androgynous Mind</a><br />
      <a href="http://www.doublexdeviant.com/">Double X Deviant</a><br />
      <a href="http://www.jillmatrix.com/">Jill Matrix</a><br />

      <a href="http://www.moby.com/index2.html" title="Not really a weblog, more of a tourlog but I love it">Moby.com</a><br />
      <a href="http://www.smacktheweasel.com/">smackTHEweasel</a><br />
      <a href="http://greybird.blogspot.com/">The grey bird talks</a><br />
      <a href="http://www.verture.net">Verture.net</a><br />
    </p>

  </div>

<div id="middle">
<h1>
    <strike>Camillog</strike> The old Camillog</h1>


  
<h5>
  Wednesday, November 27, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/scary.gif" alt="scary" />
      
<b>Pretty scary stuff</b><br />
I went to se Harry Potter and The Chamber of Secrets last
night. I just love that magic world those kids live in. And
I really love Daniel Radcliffe who plays Harry -He is really
a good choice for the part. My favourite is Alan Rickman who
plays Professor Snipe though. He is just the all time
greatest actor in the evil category. <br />
I thought the movie had some really scary scenes which I,
being 27, could cope with. I just  wonder how I would have
felt about those scenes if I was 13 though. I'm pretty sure
I would be scared half to death. At the risk of sounding like
an old sour lady I must say that I'm a little worried about
the intensity of films for children. I loved this film as I
loved The Ice Age for instance, but I would not let my
children under 14 see them if I had any. They are too
violent and sometimes also very sad. It took me a week to
recover from seeing Lassie when I was 10 so I'm pretty sure 
that sad films have an effect on kids.<br />
Am I getting old and sour or has the intensity just doubled
since I was a kid?
</p>

<p class="ten"> 6:00 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#85168444">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=85168444','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blahs [2]</a> </p>

  
<h5>
  Saturday, November 23, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/square.gif" alt="square" />
      
<b>A bot?</b><br />
All the little drawing-like gifs I have on my site are actually
dingbats I downloaded from this guy called <a
href="http://fonts.tom7.com/">Tom's site</a>. He is a genius font and
dingbat (or tombot as he calls them) maker. You should go check out
his site. <br />
I simply use MSPaint to make the little monsters and save them as
gifs. I get nervous every time I try to use a graphics program more
complicated than my beloved MSPaint. That program was probably the
first program I ever learnt how to use (apart from the games for my
Commodore 64) back when I sat at my fathers computer and doodled ugly
little paintings.
If you have absolutely no idea how to install fonts or dingbats Tom
also has a nice little <a
href="http://fonts.tom7.com/install/">how-to</a> at his site.<br />
I also wrote a very uncomplicated piece of PHP code that will let me write a line as
simple as &lt;? bot("pants"); ?&gt; when I want a gif to be
displayed in a post. The clever thing is that the function will
generate the absolute address of the gif so that it will be displayed
right in both my main directory and my archives. Also it auto
generates an alt="something" text so that it doesn't mess up my valid
XHTML code. Here is the function if anyone is interested. It's not
rocket science, but very usefull:
</p>
<tt>
/*---------------------------BOT-------------<br />
   puts a "bot" on a webpage with an absolute address.<br />
   The $name variable should be just the name of the gif (without the
.gif)		<br />
---------------------------------------------*/<br />
	
function bot($name)	{<br />
  &nbsp;echo "&lt;img class=\"bot\" src=\"http://www.yoursite.com/pathTo/images/" .<br />
&nbsp;&nbsp;$name . ".gif\" alt=\"$name\" /&gt;<br />
&nbsp;&nbsp;			\n";<br />
	}
</tt>
<p>
Put the function in the bottom of your page or in an include file.
When ever you want to have a gif just call &lt;?
bot("theNameOfYourGif"); ?&gt;. It's so much easier than writing
the whole &lt;img&gt; tag thing. 
</p>

<p class="ten"> 1:40 AM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84949068">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84949068','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blahs [3]</a> </p>

  
<h5>
  Friday, November 22, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/tipi.gif" alt="tipi" />
      
<b>Busy and a little sad...</b><br />
I haven't updated for a week now. I have been stressed 
out because I had to write a talk I was going to give 
at the University this Wednesday. It was about the 
"Council Book" of the K'iche' Maya of highland Guatemala called 
<a href="http://www.amazon.co.uk/exec/obidos/ASIN/0684818450/ref=sr_aps_books_1_3/026-1064133-2712465">
Popol Vuh</a> and it went very well, so I was pretty pleased with my self.<br />
I have stopped studying American Indian language and culture this 
year, to study software development instead, but I realized when I  
wrote my talk that I miss my old department... Oh well, nothing to do  
about that now -I can still have the Maya as my hobby. I guess every  
time you start a new place you realize how comfortable you were just  
where you came from. Sob.. 

</p>

<p class="ten"> 3:18 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84923639">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84923639','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blah [0]</a> </p>

  
<h5>
  Friday, November 15, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/magnet.gif" alt="magnet" />
      
<b>A quick ad for my favorite browser</b><br />
Let me start out by saying that I am not at all religious. I
don't really take sides in the software wars between the
open source community and the big Bill Gates money machine
(OK. maybe I'm a little biased). <br />
My cute little dino-browser Mozilla is the best thing that
happened to me on the internet since I discovered that an 
e-mail is different from a web-page (yes, that actually sunk
in somewhere in 1997). I found a list of <a href="
http://www.xulplanet.com/ndeakin/arts/reasons.html">a 101
things Mozilla can do</a> that Internet Explorer
cannot. Once you've read that list you will never consider
using IE ever again..

</p>

<p class="ten"> 11:10 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84595455">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84595455','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blah [0]</a> </p>

  
<h5>
  Thursday, November 14, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/pants.gif" alt="pants" />
      
<b>Can't help smiling</b><br />
Sometimes I get very happy seeing an ad, a movie or reading
something where gay people casually appear just as any other
character would. Gay people are a part of life so they
<u>should</u> appear in everyday life media. I remember a
Danish ad from the nineties for a newspaper with two men
cooking together and then kissing passionately. When I saw
that add it made me very happy and I thought "Hey! Finally
they start portraying someone else than the Ajax lady and
mister Proper". I haven't seen a lot of these commercials
since then but it kept me smiling for a long while.<br />
Now I found a <a href="http://www.commercialcloset.org/cgi-bin/iowa/index.html">
site that records commercials</a> with a gay content where
you can watch <a href="http://www.commercialcloset.org/cgi-bin/iowa/quicktime.html?record=392">
the ad I'm talking about</a>. This site
will keep me smiling for a while as long as I stay away from
the "negative" category.
</p>

<p class="ten"> 10:25 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84543516">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84543516','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blahs [2]</a> </p>

  
<h5>
  Tuesday, November 12, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/bulb.gif" alt="bulb" />
      
<b>Hey! Who turned out the light!?</b><br />
These are dangerous days for weblog owners. I've just had an
electrician fix some old wires that made the whole apartment
a fire trap and <a href="http://www.androgynousmind.com/archives/2002_11.php#000295">
Jael</a> is being gassed in her home. Be carefull out
there!<br />
Yesterday suddenly the computer died as if someone had
pulled the plug. It turned out that the socket on the wall
was dead and the socket next door was dead too.. Hmm.. I
heard no short-circuit noise (what ever that sounds like),
all the other power was on in the rest of the apartment, and
no fuses had popped. This is where I got kind of scared
because that meant that some old wires, and I mean really
old -the building is from 1910 or something like that, were
somewhere in the wall probably making sparks. Luckily the
electrician came quick and put the wires back together. He
told me that it would be a very, very good idea to have all
the wires replaced with some that are not almost a hundred
years old. He is probably right.<br />
As you all know I'm not very rich right now so an
electrician bill was not at all what I whished for but on
the other hand, how am I to update my weblog when the power
is off the computer? I have great respect for electrical
installations and although I (of course) own a well supplied
toolbox I am not going to risk my life to avoid a bill and
fix it myself. Sigh... There goes the finance for this month
down the drain. Again.
</p>

<p class="ten"> 4:38 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84420731">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84420731','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blahs [2]</a> </p>

  
<h5>
  Sunday, November 10, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/hexapod.gif" alt="hexapod" />
      
<b>Slow slow quick quick slow</b><br />
I have always had a theory about my ability to dance that
has something to do with dinosaurs. I once heard that the
really big dinosaurs had an extra brain in the tip of their
tail to control it because the nerve impulses took too long
to travel all the way from the head to the tail. I am 1,85
meters tall and I don't think I have a brain in my feet so I
thought that I just would never learn to dance because my
nerve impulses have to travel too far. For the same reason
the only music I really liked dancing to was techno because
the rhythm is not at all challenging for someone with slow
nerve impulses and only one brain. <br />
A few moths ago a friend of mine called Hege and I decided
to try to prove that theory wrong so we started at a <a
href="http://pandans.dk/organization.htm">traditional dance
course</a> (well, traditional but in a gay organization). We
can now dance the waltz, quickstep, cha-cha, and jive so
that it -ehem- looks almost as if we don't need an extra
brain to avoid stepping on each others feet. And I must
admit that I really like learning to dance, I find myself
trying to persuade my girlfriend to dance with me all the
time (she is not very cooperative on that though). <br />
Who knows? We may even enter the dancing competition in the
<a href="
http://www.gaysport.info/eurogames/2003/index.htm">Eurogames
2003</a> in Copenhagen.

</p>

<p class="ten"> 11:21 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84331096">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84331096','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blahs [2]</a> </p>

  
<h5>
  Tuesday, November 05, 2002
</h5>

<p class="useit">
  <img class="bot" src="https://xoc.dk/older/images/things/avsShot.png" alt="psycadelic" />
<b>Even more distracted</b><br />
I'm still supposed to do something other than listening to
music on my computer. I just get hypnotized by the <a
href="http://www.winamp.com/components3/browse.jhtml?categoryName=AVS">
visualization</a> studio in WinAmp combined with
just the right volume of <a
href="http://www.amazon.com/exec/obidos/ASIN/B00005AUBU/102-7670762-3935304">
Buddha Bar III</a>.
When I get rich someday I want to lie in a <a
href="http://fincaixobel.com/">hammock in Guatemala</a>
listening to this music on my minidisc and have my own
visualization studio in my head due to some local herbs.
</p>

<p class="ten"> 3:36 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84060452">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84060452','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blah [1]</a> </p>

  
<h5>
  Monday, November 04, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/book.gif" alt="book" />
      
<b>Distractions!</b><br />
I was supposed to read something very boring about software
user-friendliness today. I kept being distracted by other
more exiting things like emptying the dishwasher, petting
the cats, figuring out how to make my site skinnable, going
to the bank to get money, and so on. I have a very good
ability to convince myself that what I should be doing is
not as important as my current distraction. <br />
Although they are not very productive I also kind of like my
distractions. Today I had a lot of things done (not reading
though), I installed the new <a
href="http://www.winamp.com/"> WinAmp3</a> instead of Real
Player that kept crashing on me. I really like WinAmp  so I
spend some time wondering why I gave it up for Real Player
in the first place. Now that I had a new player I thought
I'd find some music with <a
href="http://winmx.com/">WinMX</a>. I came across this
Russian band called <a
href="http://www.tatu.ru/eng/main.shtml">Tatu</a> with two
teenage girls singing that they love each other and making
out in their video for "All the things she said". Oh joy! I
thought as I completely bought it as "real lesbians coming
out to the world". An hour later it struck me that there
might be a good deal of marketing involved in their "cute
schoolgirls make out"-video. But I always want to believe
when I come across stuff like that, who can honestly say
that they didn't wish that Gina Gershon was the real thing
in <a href="http://us.imdb.com/Title?0115736">Bound</a>?
</p>

<p class="ten"> 11:47 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#84026316">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=84026316','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blah [0]</a> </p>

  
<h5>
  Sunday, November 03, 2002
</h5>

<p class="useit">
  <b>Homemade RSS-feed</b><br />
Try clicking the XML image on the left side of my page. It
took me a month of research to write this feature, but I
made it all by myself! I found that I had to, my complexes
over having such a low-tech site were killing me.<br />
What do you think? At a small price I might sell the
technology behind it.
</p>

<p class="ten"> 12:21 AM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#83934908">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=83934908','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blah [0]</a> </p>

  
<h5>
  Saturday, November 02, 2002
</h5>

<p class="useit">
    <img class="bot" src="https://xoc.dk/older/images/bots/puter.gif" alt="puter" />
      
<b>The game of death?</b><br />
I haven't written much on my weblog this week
because I have been more than busy trying to solve
my Java programming assignment due this Friday.
The assignment was to write a "game of life"
program. I was supposed to make an applet like <a
href="http://www.bitstorm.org/gameoflife/">this</a> that will follow these simple rules: if a cell
has less than 2 neighbours it will die, if a cell
has 3 neighbours a new cell will be born there,
and if a cell has more than 3 neighbours it dies.
A cell is (in my applet) brownish when dead and
green when living. You can have fun with my
miserable shot at a solution <a
href="https://xoc.dk/older/misc/applets/gameOfDeath.html">here</a>.<br />
My problem is that the goddamn applet does not
follow those simple rules. I have never really
understood that people in the IT business burn out
quickly and many have mental problems. I guess I
got the answer this week, I have been very close
to submitting my self to the nearest psychiatric
clinic many, many times this week.
</p>

<p class="ten"> 9:47 PM | 
  <a href="../backthen/2002_11_01_oldcamillog.php#83930360">Link</a> | <a href="#"onclick="Camillog_comment=window.open('https://xoc.dk/older/comments/comment.php?postNo=83930360','Camillog_comment','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,width=450,height=500'); return false;">Blah blahs [3]</a> </p>

 </div>
<!-- RIGHTSIDE CONTENT -->
    <div id="right">
		<h4>Todays quote: </h4>
		<p class="eleven">
			The Russians love Brooke Shields because her eyebrows remind them of Leonid Brezhnev.
			<br />
			- Robin Williams -

		</p>
    <h6>
      <a href="http://www.blogger.com"><img width="88" height="31" src="https://xoc.dk/older/images/bloggerbutton.gif" border="0" alt="This page is powered by Blogger. Isn't yours?" /></a><br />
      <br />
    </h6>
    <h6>
      <a href="http://fonts.tom7.com/"><img src="https://xoc.dk/older/images/dbz-bt1.gif" alt="Tom" /></a>
      <br />
     </h6>   
     
     <h6>
        <a href="#"onclick="RSS_Feed=window.open('https://xoc.dk/older/misc/stuff/RSSfeed.php','RSS_Feed','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=400'); return false;"><img src="https://xoc.dk/older/images/xml.gif" alt="XML" /></a> 
      </h6>      
      </div>
</body>
</html>
