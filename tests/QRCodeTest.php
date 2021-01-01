<?php

namespace AdamGaskins\Barcoder\Tests;

use Spatie\Snapshots\MatchesSnapshots;

class QRCodeTest extends TestCase
{
    use MatchesSnapshots;

    /** @test */
    public function it_generates_svg_barcodes()
    {
        $this->assertMatchesSvgSnapshot(\Barcoder::qrcode('abcd')->toSvg());
    }

    /** @test */
    public function it_generates_png_barcodes()
    {
        $this->assertMatchesPngSnapshot(\Barcoder::qrcode('abcd')->toPng());
    }
}
