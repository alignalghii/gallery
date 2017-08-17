			<a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/app/Routes.php#L22-L23" target="_blank">&rarr; Router</a>
			<a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/app/Controller/StudentController.php#L52-L76" target="_blank">&rarr; Action</a>
			<a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/framework/Form.php#L81-L133" target="_blank">&rarr; Validation</a>
			<a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/framework/ORM/Repository.php#L52-L58" target="_blank">&rarr; Model</a>
			<a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/framework/ORM/Builder.php#L14-L30" target="_blank">&rarr; SQL-builder</a>

			<hr/>

		<table class="tree">
			<tr>
				<td rowspan="3" title="POST <?php echo $actionUri; ?>" class="full"><a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/app/Routes.php#L22-L23" target="_blank">Route match</a></td>
				<td rowspan="3">&rarr;</td>
				<td rowspan="3" title="StudyGroupController::update" class="full"><a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/app/Controller/StudentController.php#L52-L76" target="_blank">Action</a></td>
				<td rowspan="2">&#8599;</td>
				<td rowspan="2" title="Form::validate" class="full"><a class="source" href="https://github.com/alignalghii/mini-studadmin/blob/92efdbce271416373b116ec348a40d30e216a2e2/framework/Form.php#L81-L133" target="_blank">Validation</a></td>
				<td>&#8599;</td>
				<td colspan="3" class="full"><a class="source" href="" target="_blank">Single-field constraints</a></td>
				<td>&rarr;</td>
				<td><a class="source" href="" target="_blank">Table metadata @ PHP</a></td>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td>&#8600;</td>
				<td><a class="source" href="" target="_blank">Constraint of uniqueness</a></td>
				<td>&rarr;</td>
				<td title="Repository::findAll"><a class="source" href="" target="_blank">Global check</a></td>
				<td>&#8600;</td>
				<td rowspan="2" class="full"><a class="source" href="" target="_blank">Table metadata @ PHP</a></td>
				<td rowspan="2">&rarr;</td>
				<td rowspan="2" class="full"><a class="source" href="" target="_blank">SQL schema</a></td>
			</tr>
			<tr>
				<td>&#8600;</td>
				<td colspan="5" title="Repository::update" class="full"><a class="source" href="" target="_blank">Model</a></td>
				<td>&#8599;</td>
			</tr>
		</table>
