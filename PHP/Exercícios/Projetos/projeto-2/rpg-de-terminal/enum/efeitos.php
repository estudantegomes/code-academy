<?php
enum Efeito: string {
    case BuffAtaque    = 'Bônus de Ataque';
    case BuffDefesa    = 'Bônus de Defesa';
    case DebuffAtaque  = 'Redução de Ataque';
    case DebuffDefesa  = 'Redução de Defesa';
    case Deterioracao  = 'Deterioração';
    case Regeneracao   = 'Regeneração';
}