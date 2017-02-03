<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * Meeting
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Meeting extends EntityRepository
{
    
    /**
     * Return an array of all meeting titles where the array key is the id.
     *
     * @return string[] An array of all meeting titles where the array key is the id.
     */
    public function getTitles()
    {
        $objs = $this->getEntityManager()->createQuery( "SELECT m FROM Entities\\Meeting m" )->getResult();
        
        $meetings = [];
        foreach( $objs as $o )
            $meetings[ $o->getId() ] = $o->getTitle();
    
        return $meetings;
    }
    
    /*
     * OLD DOCTRINE1 CODE FOR POSSIBLE PORTING
    
     * Return the futuremost available meeting as an array
     *
     * This is essentially a search for an upcoming meeting and returns it if found.
     *
     * @return array|bool The Meeting object array or false
     *
    public static function getUpcomingMeeting()
    {
        return Doctrine_Query::create()
                 ->from( 'Meeting m' )
                 ->where( 'm.date > ?', date( 'Y-m-d' ) )
                 ->orderBy( 'm.date DESC' )
                 ->setHydrationMode( Doctrine_Core::HYDRATE_ARRAY )
                 ->fetchOne();
    }
     */
}
