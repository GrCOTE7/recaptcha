<div id="<?= $this->getId('mailPreviewContainer') ?>"></div>
<script type="text/template" id="<?= $this->getId('mailPreviewTemplate') ?>"><?= $this->renderSampleMessage() ?></script>

<script>
    $(function(){
        var previewContents = $('#<?= $this->getId('mailPreviewTemplate') ?>').html()
            previewFrame = $('#<?= $this->getId('mailPreviewContainer') ?>').get(0)

        createPreviewContainer(previewFrame, previewContents)
    })
</script>
