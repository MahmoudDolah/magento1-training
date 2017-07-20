<?php
assertEquals(6, $value); } /** * This method will be executed as a test because of the annotation * * @test */ public function somethingHappens() { $value = 1 + 1; $this->assertNotEquals(3, $value); } }
