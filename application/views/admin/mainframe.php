<?php include Kohana::find_file('views', 'header'); ?>		<script language="javascript" type="text/javascript">			//time to polish my js skills			$(document).ready(function(){				$('li').click(function(){					$(".active").attr("class","");					$(this).attr("class","active");					$.get("<?php echo URL::base();?>admin/"+$(this).html(),function(data){$('.content').html(data);});				});			});		</script>		<div class="admin_wrap">			<div class="menu">				<ul>					<li class="active">overview</li>					<li>users</li>					<li>blogs</li>					<li>forum</li>					<li>fragments</li>					<li>profiler</li>					<li>settings</li>					<li>reports</li>					<li>front-end</li>					<li>update</li>				</ul>			</div>			<div class="content">				<div class="pagetitle">Overview</div>				<p>Temporarily this page is just garbage. Use the sections at the left to check for sections that actually work.</p>			</div>		</div><?php include Kohana::find_file('views', 'footer'); ?>