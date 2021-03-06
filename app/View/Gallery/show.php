		<ul class="upper-menu internal">
			<li><a class="menu-icon" href="/">Back to home</a></li>
			<li><a class="menu-icon" href="/samples">Back to offer email link samples</a></li>
			<li><a class="menu-icon" href="/focus-js/<?php echo $offerId; ?>/<?php echo $pictureId; ?>">JavaScript version</a></li>
		</ul>
		<h1><?php echo $title; ?></h1>
		<table class="records">
			<tr>
				<th>Offer</th>
				<th>Advisor</th>
				<th>Flat</th>
			</tr>
			<tr>
				<td>
					<ul>
						<li>Sent email: <?php echo $offer['sent_email']; ?></li>
						<li>Due till: <?php echo $offer['due_date']; ?></li>
					</ul>
				</td>
				<td>
					<ul>
						<li>Name: <?php echo $offer['advisor_name']; ?></li>
					</ul>
				</td>
				<td>
					<ul>
						<li>Address: <?php echo $offer['flat_address']; ?></li>
					</ul>
				</td>
			</tr>
		</table>
		<h2 id="focus-label">Focusing picture #<?php echo $pictureId; ?></h2>
		<a id="left" <?php if (isset($prevId)): ?>href="<?php echo "/focus/$offerId/$prevId"; ?>"<?php else: ?>style="visibility: hidden"<?php endif; ?>>Left</a>
		<a id="right" <?php if (isset($nextId)): ?>href="<?php echo "/focus/$offerId/$nextId"; ?>"<?php else: ?>style="visibility: hidden"<?php endif; ?>>Right</a>
		<ul id="pics">
<?php foreach ($pictures as $picture): ?>
			<li>
<?php if ($picture['id'] != $focus): ?>
				<a href="<?php echo "/focus/$offerId/" . $picture['id']; ?>"><img class="thumbnail" src="<?php echo $picture['src']; ?>"/></a>
<?php else: ?>
				<img class="slide focus" src="<?php echo $picture['src']; ?>"/>
<?php endif; ?>
			</li>
<?php endforeach; ?>
		</ul>
