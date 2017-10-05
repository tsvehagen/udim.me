# [udim.me](http://udim.me) website

### About

udim.me is a project I made for controlling a lamp over BLE with design in mind. The lamp is connected to a dimmer-box which in turn connects to the power outlet. The lamp can then be turned on/off or dimmed with a wooden puck.

* The PCBs were designed with EagleCAD and manufactured by [OSHPark](https://oshpark.com/)
* Both the puck and dimmer-box are using a nRF52 chip running [Zephyr RTOS](https://www.zephyrproject.org/)
* The puck uses the Bosch BMI160 for gyro and accelerometer
* The dimmer-box uses triac and zero-crossing detection for dimming
* A transformerless power supply based on capacitive full-wave rectification is used in the dimmer-box to get from 230 VAC to 3.3 VDC.

### Images

<p float="left">
    <img src="/src/img/gallery/puck-dark-sm.jpg" width="270" hspace="10" />
    <img src="/src/img/gallery/puck-box-sm.jpg" width="270" hspace="10" />
    <img src="/src/img/gallery/pcb-sm.jpg" width="270" hspace="10" />
</p>
