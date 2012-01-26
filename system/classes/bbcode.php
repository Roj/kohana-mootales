<?php defined('SYSPATH') or die('No direct script access.');

class BBCode {
	public static function textarea_buttons($id) {
		$base = URL::base()."images";
		return <<<HTML
					<div class="toolbar">
						<img src="{$base}/bold.png" onclick="insertAtCaret('[b]','[/b]','$id')"/>
						<img src="{$base}/italic.png" onclick="insertAtCaret('[i]','[/i]','$id')"/>
						<img src="{$base}/strikethrough.png" onclick="insertAtCaret('[s]','[/s]','$id')"/>
						<img src="{$base}/underline.png" onclick="insertAtCaret('[u]','[/u]','$id')"/>
						<img src="{$base}/align_center.png" onclick="insertAtCaret('[center]','[/center]','$id')"/>
						<img src="{$base}/align_justify.png" onclick="insertAtCaret('[justify]','[/justify]','$id')"/>
						<span onclick="insertAtCaret('&#3232;\_&#3232;','','$id');" style="font-size:0.7em; font-family: sans-serif;">&#3232;_&#3232;</span>
					</div>
HTML;
	}
	public static function parse($content) {
		//Taken from  http://www.bloogie.es/tecnologia/programacion/237-bbcode-parser-con-php#ixzz1g6gOqx4u 
		//They saved me from a regex hell
		//I modified it, the most important change was the support of plain URLs
		//supports: center, bold, italic, underline, strikethrough, quote, code, color, URL, image
		/*Plain URLs are found using its protocol and a trailing space-character (\s)
		as delimiters. The problem is that, when the URL has no trailing
		space-character (i.e. it's at the EOF), it won't parse it. The following 
		line of code fixes that.
		The following characters are supported in my plain url conversion:
		a-z A-Z 0-9  _  -  . / 
		*/
		$content.=' '; 
		$patterns = array( 
			'#\[center\](.*?)\[/center\]#is',
			'#\[justify\](.*?)\[/justify\]#is',
			'#\[b\](.*?)\[/b\]#is', // Bold ([b]text[/b]
			'#\[i\](.*?)\[/i\]#is', // Italics ([i]text[/i]
			'#\[u\](.*?)\[/u\]#is', // Underline ([u]text[/u])
			'#\[s\](.*?)\[/s\]#is', // Strikethrough ([s]text[/s])
			'#\[quote\](.*?)\[/quote\]#is', // Quote ([quote]text[/quote])
			'#\[code\](.*?)\[/code\]#is', // Inline code [code]text[/code])
			'#\[color=\#?([A-F0-9]{3}|[A-F0-9]{6})\](.*?)\[/color\]#is', // Font colour ([color=#00F]texto[/color])
			'#\[url=((?:ftp|https?)://.*?)\](.*?)\[/url\]#i', // Link with text ([url=http://url]texto[/url])
			'#\[url\]((?:ftp|https?)://.*?)\[/url\]#i',
			'#(http|https|ftp)://([a-zA-Z0-9_/\.-]+)(\t|\n|\r|\f|\v| )#i',  // plain URLS
			'#\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]#i' // Image ([img]http://url_de_imagen[/img])
		); 
		$replacements = array(
			'<p class="center">$1</p>',
			'<p class="justify">$1</p>',
			'<span class="bold">$1</span>',
			'<span class="italic">$1</span>',
			'<span class="underline">$1</span>',
			'<span class="strikethrough">$1</span>',
			'<blockquote>$1</blockquote>',
			'<pre>$1</'.'pre>',
			'<span style="color: #$1;">$2</span>',
			'<a href="$1">$2</a>',
			'<a href="$1">$1</a>',
			'<a href="$1://$2">$1://$2</a>$3',
			'<img src="$1" alt="" />' ); 
		$content = preg_replace($patterns, $replacements, $content); 
		return nl2br($content);
	}
}

