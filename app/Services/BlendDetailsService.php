<?php

namespace App\Services;

use App\Repositories\BlendDetailsRepository;

class BlendDetailsService
{
    /**
     * @var BlendDetailsRepository
     */
    protected $blendDetailsRepository;

    /**
     * BlendDetailsService constructor.
     *
     * @param BlendDetailsRepository $blendDetailsRepository
     */

    public function __construct(BlendDetailsRepository $blendDetailsRepository)
    {
        $this->blendDetailsRepository = $blendDetailsRepository;
    }


    public function getBlendDetailsById(int $id)
    {
        $blendDetails = $this->blendDetailsRepository->findById($id)->toArray();

        return $blendDetails;
    }

        /**
     * Get all blend details options.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllBlendDetailsOptions()
    {
        $blendDetails = $this->blendDetailsRepository->getAllBlendDetails()->toArray();
        
        return $blendDetails;
    }

}
