<ul data-role="listview" data-theme="a">
	{{ for $tabs as $tab }}
		<li><a href="$tab.url" class="tab button $tab.sel">$tab.label</a></li>
	{{ endfor }}
</ul>
