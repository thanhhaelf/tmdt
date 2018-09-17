/**
 * Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

/* exported initSample */

if (CKEDITOR.env.ie && CKEDITOR.env.version < 9)
    CKEDITOR.tools.enableHtml5Elements(document);

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 150;
CKEDITOR.config.width = 'auto';
CKEDITOR.config.skin = 'moonocolor';

var initContent = (function () {
    var wysiwygareaAvailable = isWysiwygareaAvailable(),
        isBBCodeBuiltIn = !!CKEDITOR.plugins.get('bbcode');

    return function () {
        var content = CKEDITOR.document.getById('content');

        // :(((
        if (isBBCodeBuiltIn) {
            content.setHtml(
                'Hello world!\n\n' +
                'I\'m an instance of [url=https://ckeditor.com]CKEditor[/url].'
            );
        }

        // Depending on the wysiwygare plugin availability initialize classic or inline editor.
        if (wysiwygareaAvailable) {
            CKEDITOR.replace('content', {
                toolbar: [
                    ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'],
                    ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'Maximize'],
                    ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat'],
                    ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
                    ['CreateDiv'],
                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                    ['BidiLtr', 'BidiRtl'],
                    ['Image', 'Flash', 'Table', 'HorizontalRule', 'Iframe', 'Styles', 'Format', 'Font', 'FontSize', 'Maximize']
                ]
            });
        } else {
            content.setAttribute('contenteditable', 'true');
            CKEDITOR.inline('content');

            // TODO we can consider displaying some info box that
            // without wysiwygarea the classic editor may not work.
        }
    };

    function isWysiwygareaAvailable() {
        // If in development mode, then the wysiwygarea must be available.
        // Split REV into two strings so builder does not replace it :D.
        if (CKEDITOR.revision == ( '%RE' + 'V%' )) {
            return true;
        }

        return !!CKEDITOR.plugins.get('wysiwygarea');
    }
})();

var initDescribe = (function () {
    var wysiwygareaAvailable = isWysiwygareaAvailable(),
        isBBCodeBuiltIn = !!CKEDITOR.plugins.get('bbcode');

    return function () {
        var describe = CKEDITOR.document.getById('describe');

        // :(((
        if (isBBCodeBuiltIn) {
            describe.setHtml(
                'Hello world!\n\n' +
                'I\'m an instance of [url=https://ckeditor.com]CKEditor[/url].'
            );
        }

        // Depending on the wysiwygare plugin availability initialize classic or inline editor.
        if (wysiwygareaAvailable) {
            CKEDITOR.replace('describe', {
                toolbar: [
                    ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'],
                    ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'Maximize'],
                    ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat'],
                    ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
                    ['CreateDiv'],
                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                    ['BidiLtr', 'BidiRtl'],
                    ['Image', 'Flash', 'Table', 'HorizontalRule', 'Iframe', 'Styles', 'Format', 'Font', 'FontSize', 'Maximize']
                ]
            });
        } else {
            describe.setAttribute('contenteditable', 'true');
            CKEDITOR.inline('describe');

            // TODO we can consider displaying some info box that
            // without wysiwygarea the classic editor may not work.
        }
    };

    function isWysiwygareaAvailable() {
        // If in development mode, then the wysiwygarea must be available.
        // Split REV into two strings so builder does not replace it :D.
        if (CKEDITOR.revision == ( '%RE' + 'V%' )) {
            return true;
        }

        return !!CKEDITOR.plugins.get('wysiwygarea');
    }
})();

