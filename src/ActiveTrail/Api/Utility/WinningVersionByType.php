<?php

namespace ActiveTrail\Api\Utility;

abstract class WinningVersionByType {
  const Highest_ClickThrough_Rate = 0;
  const Highest_Open_Rate = 1;
  const I_Will_Pick_The_Winner_Manually = 2;
  const Highest_CTO_Rate = 3;
  const Highest_conversions_Number = 4;
  const Highest_Profit_Number = 5;
}
