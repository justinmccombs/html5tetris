soundManager.setup({
    onready: function() {
        var blockRotated = soundManager.createSound({
            id: 'blockRotated',
            url: 'media/sounds/block-rotated.mp3'
        });

        var blockDropped = soundManager.createSound({
            id: 'blockDropped',
            url: 'media/sounds/block-dropped.mp3'
        });

        var lineComplete = soundManager.createSound({
            id: 'lineComplete',
            url: 'media/sounds/line-complete.mp3'
        });

        var gameOver = soundManager.createSound({
            id: 'gameOver',
            url: 'media/sounds/game-over.mp3'
        });
    }
})