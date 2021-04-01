<?php
// 型厳重モード
declare(strict_types=1);

// Moneyクラス
class Money
{
    // プロパティ
    
    public int $income = 0; //収入
    public int $outcome = 0; //支出


    // メソッド

    // 収入の値を入った時に、$incomeにその値を加える
    public function addIncome(int $newIncome): int
    {
        return $this->income += $newIncome;
    }

    // 支出が発生した時に、$outcomeにその値を加える
    public function addOutcome(int $newOutcome): int
    {
        return $this->outcome += $newOutcome;
    }

}