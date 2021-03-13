<?php

namespace AyoubBajjou\Diff\Entry;

use AyoubBajjou\Diff\Text;

/**
 * Class UnmodifiedEntry
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 *
 * @package AyoubBajjou\Diff\Entry
 */
class UnmodifiedEntry extends AbstractEntry {

    /**
     * @param \AyoubBajjou\Diff\Text $content
     * @param int              $newPosition
     * @param int              $oldPosition
     */
    public function __construct(Text $content, $oldPosition, $newPosition) {
        $this->content = $content[$newPosition];
        $this->newPosition = $newPosition;
        $this->oldPosition = $oldPosition;
    }
}