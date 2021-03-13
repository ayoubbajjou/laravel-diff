<?php

namespace AyoubBajjou\Diff\Entry;
use AyoubBajjou\Diff\Text;

/**
 * Class DeletedEntry
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 *
 * @package AyoubBajjou\Diff\Entry
 */
class DeletedEntry extends AbstractEntry {
    /**
     * @param \AyoubBajjou\Diff\Text $content
     * @param int              $oldPosition
     */
    public function __construct(Text $content, $oldPosition) {
        $this->content = $content[$oldPosition];
        $this->oldPosition = $oldPosition;
    }
}