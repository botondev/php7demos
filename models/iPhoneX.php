<?php
/**
 * Created by PhpStorm.
 * User: Bboto
 * Date: 2018. 08. 29.
 * Time: 21:39
 */
include_once 'interfaces\IPhone.php';
include_once 'strategies\DefaultPhoneCallStrategy.php';

class iPhoneX implements IPhone
{
    protected $resolution;
    protected $capacity = 256;
    protected $size;
    protected $brand = "Apple \u{00A9}"; // https://www.compart.com/en/unicode/U+00A9
    protected $callStrategy;

    public function setResolution(Resolution $resolution) {}
    public function getResolution(): Resolution {
        // lazy loading
        if(!isset($this->resolution)) {
            $this->setResolution(new Resolution(1125, 2436));
        }
        return $this->resolution;
    }

    public function setCapacity(int $GB) {}
    public function getCapacity(): int {
        return $this->capacity;
    }

    public function setSize(Size $size) {}
    public function getSize(): Size {
        // lazy loading
        if(!isset($this->size)) {
            $this->size = new Size(143.6, 70.9, 7.7);
        }
        return $this->size;
    }

    public function setBrand(string $brand) {}
    public function getBrand(): string {
        return $this->brand;
    }

    public function setCallStrategy(IAction $callStrategy) {
        $this->callStrategy = $callStrategy;
    }

    public function getCallStrategy(): IAction {
        // lazy loading
        if(!isset($this->callStrategy)){
            $this->setCallStrategy(new DefaultPhoneCallStrategy());
        }
        return $this->callStrategy;
    }

    public function call(string ...$phoneNumber): void {
        $this->getCallStrategy()->call($phoneNumber);
    }

}