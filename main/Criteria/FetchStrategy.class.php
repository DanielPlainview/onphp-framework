<?php
/***************************************************************************
 *   Copyright (C) 2006 by Konstantin V. Arkhipov                          *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU General Public License as published by  *
 *   the Free Software Foundation; either version 2 of the License, or     *
 *   (at your option) any later version.                                   *
 *                                                                         *
 ***************************************************************************/
/* $Id$ */

	/**
	 * @ingroup Criteria
	**/
	final class FetchStrategy extends Enumeration
	{
		const JOIN		= 1;
		const CASCADE	= 2;
		
		protected $names = array(
			self::JOIN		=> 'queryJoinedObjectSet',
			self::CASCADE	=> 'queryObjectSet'
		);
		
		/**
		 * @return FetchStrategy
		**/
		public static function join()
		{
			return new self(self::JOIN);
		}
		
		/**
		 * @return FetchStrategy
		**/
		public static function cascade()
		{
			return new self(self::CASCADE);
		}
	}
?>