<?php ?>
/* <style> /**/
/**
 * CSS form/input elements
 */

/* ***************************************
	Form Elements
*************************************** */
.elgg-form-body,
.elgg-form-body > div,
.elgg-form-body fieldset:not(.elgg-fieldset) > div,
.elgg-field {
	&:not(:last-child) {
		margin-bottom: 1rem;
	}
}

label, .elgg-field-label {
	font-weight: 600;
	font-size: 0.9rem;
	line-height: 1.8rem;
}

.elgg-field-label {
	display: block;
}

.elgg-field-disabled {
	.elgg-field-label {
		opacity: 0.6;
	}
}

.elgg-required-indicator {
	font-size: 110%;
	font-weight: bold;
	color: var(--elgg-state-danger-font-color);
	display: inline;
	padding: 0 5px;
}

input, textarea {
	border: 1px solid var(--elgg-border-color-mild);
	color: var(--elgg-text-color-strong);
	font-size: 1rem;
	padding: 0.25rem 0.5rem;
	line-height: normal;
	width: 100%;
	border-radius: 3px;
}

input:disabled,
textarea:disabled,
select:disabled,
option:disabled {
	cursor: not-allowed;
}

textarea {
	padding: 0.5rem;
}

input[type=email],
input[type=password],
input[type=text],
input[type=number],
input[type=url],
input[type=color],
input[type=datetime-local],
input[type=month],
input[type=search],
input[type=tel],
input[type=week], {
	height: 2.5rem;
}

input[type=email]:focus,
input[type=password]:focus,
input[type=text]:focus,
input[type=number]:focus,
input[type=url]:focus,
input[type=color]:focus,
input[type=datetime-local]:focus,
input[type=month]:focus,
input[type=search]:focus,
input[type=tel]:focus,
input[type=week]:focus,
textarea:focus {
	border: solid 1px var(--elgg-border-color-strong);
	background-color: var(--elgg-background-color-soft);
	/* We remove outlines from specific input types so we can leave the browser
	   defaults (like glows) for everything else */
	outline: 0 none;
}

input[type="checkbox"],
input[type="radio"] {
	margin: 0 0.25rem 0 0;
	padding: 0;
	border: none;
	width: auto;
	vertical-align: middle;
}

input[type="number"] {
	-moz-appearance: textfield;
}

.elgg-input-checkbox + label,
.elgg-input-checkbox + .elgg-field-label {
	display: inline-block;
}

.elgg-input-checkboxes.elgg-horizontal li,
.elgg-input-radios.elgg-horizontal li {
	display: inline-block;
	padding-right: 1rem;
}

.elgg-color-box {
	width: 1.0rem;
	height: 1.0rem;
	display: inline-block;
	background-color: #ccc;
	left: 5px;
	top: 5px;
	border: 1px solid #000;
	border-radius: 3px;
}

.elgg-input-color {
	width: 4.5rem;
}

<?php
echo elgg_view('elements/misc/checkbox_switch.css');
?>

select {
	max-width: 100%;
	border: 1px solid var(--elgg-border-color-mild);
	color: var(--elgg-text-color-strong);
	padding: 0.25rem 0.5rem;
	line-height: 1.75rem;
	vertical-align: middle;
	border-radius: 3px;
}

select:not([multiple]) {
	height: 2.5rem;
}

.elgg-form-account {
	margin-bottom: 1rem;
}

.elgg-input-radios label {
	font-weight: normal;
	font-size: 100%;
}

.elgg-input-checkboxes {
	label {
		font-weight: normal;
		font-size: 100%;
		line-height: inherit;
	}
	
	&.elgg-horizontal label > .elgg-input-checkbox {
		vertical-align: baseline;
	}
}

.elgg-form-login, .elgg-form-account {
	max-width: 40rem;
	margin: 0 auto;
}

.elgg-fieldset {
	display: flex;
	flex-direction: column;
	gap: 1rem;
	
	&.elgg-fieldset-has-legend {
		border: 1px solid var(--elgg-border-color-soft);
		padding: 1rem;
		margin-bottom: 1rem;
	}
	
	> .elgg-field {
		margin: 0;
	}
}

@media $(media-phone-up) {
	.elgg-field {
		&.elgg-field-horizontal {
			display: flex;
			flex-direction: row;
			align-items: baseline;
			column-gap: 1rem;
			
			&.elgg-field-stretch {
				flex-basis: 1%;
				flex-grow: 1;
				
				> .elgg-field-input {
					width: 100%;
				}
			}
			
			> .elgg-field-label {
				align-items: center;
				display: flex;
				flex-shrink: 0;
			}
		}
	}

	.elgg-fieldset-horizontal {
		flex-direction: row;
		
		> .elgg-field {
			vertical-align: top;
		}
		
		&.elgg-fieldset-wrap {
			flex-wrap: wrap;
		}
		
		&.elgg-justify-right {
			justify-content: flex-end;
		}
		
		&.elgg-justify-center {
			justify-content: center;
		}
	}
}

<?php
echo elgg_view('elements/components/autocomplete.css', $vars);
echo elgg_view('elements/components/datepicker.css', $vars);
echo elgg_view('input/entitypicker.css', $vars);
echo elgg_view('input/tags.css', $vars);
