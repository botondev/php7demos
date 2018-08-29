<?php
/**
 * Created by PhpStorm.
 * User: Botondev
 * Date: 2018. 08. 29.
 * Time: 21:35
 */

interface IPhone {
    public function getResolution(): Resolution;
    public function setResolution(Resolution $resolution);

    public function getCapacity(): int;
    public function setCapacity(int $GB);

    public function getSize(): Size;
    public function setSize(Size $size);

    public function setBrand(string $brand);
    public function getBrand(): string;

    public function call(string ...$phoneNumber): void; // return type void is a 7.1 feature
    public function setCallStrategy(IAction $callStrategy);
    public function getCallStrategy(): IAction;
}