<?php defined('SYSPATH') or die('No direct script access.');

class BBCode {
	public static function parse($content) {
		//Thanks to  http://www.bloogie.es/tecnologia/programacion/237-bbcode-parser-con-php#ixzz1g6gOqx4u 
		//They saved me from a regex hell
		$patterns = array( 
			'#\[b\](.*?)\[/b\]#is', // Negrita ([b]texto[/b]
			'#\[i\](.*?)\[/i\]#is', // Cursiva ([i]texto[/i]
			'#\[u\](.*?)\[/u\]#is', // Subrayado ([u]texto[/u])
			'#\[s\](.*?)\[/s\]#is', // Tachado ([s]texto[/s])
			'#\[quote\](.*?)\[/quote\]#is', // Cita ([quote]texto[/quote])
			'#\[code\](.*?)\[/code\]#is', // Código inline [code]texto[/code])
			'#\[size=([1-9]|1[0-9]|20)\](.*?)\[/size\]#is', // Tamaño de fuente 1-20px [size=20]texto[/size])
			'#\[color=\#?([A-F0-9]{3}|[A-F0-9]{6})\](.*?)\[/color\]#is', // Color de fuente ([color=#00F]texto[/color])
			'#\[url=((?:ftp|https?)://.*?)\](.*?)\[/url\]#i', // Enlace con texto de anclaje ([url=http://url]texto[/url])
			'#\[url\]((?:ftp|https?)://.*?)\[/url\]#i', // Enlace ([url]http://url[/url])
			'#\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]#i' // Imagen ([img]http://url_de_imagen[/img])
		); 
		$replacements = array(
			'<span class="bold">$1</span>',
			'<span class="italic">$1</span>',
			'<span class="underline">$1</span>',
			'<span class="strikethrough">$1</span>',
			'<blockquote>$1</blockquote>',
			'<pre>$1</'.'pre>',
			'<span style="font-size: $1px;">$2</span>',
			'<span style="color: #$1;">$2</span>',
			'<a href="$1">$2</a>',
			'<a href="$1">$1</a>',
			'<img src="$1" alt="" />' ); 
		$content = preg_replace($patterns, $replacements, $content); 
		return nl2br($content);
	}
}
