<?php

/* This file is auto-generated. Don't edit directly! */

namespace Jsor\Doctrine\PostGIS\Query\AST\Functions;

use Doctrine\ORM\Configuration;

class Configurator
{
    public static function configure(Configuration $configuration)
    {
        $configuration->addCustomStringFunction('ST_Box2dFromGeoHash', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Box2dFromGeoHash');
        $configuration->addCustomStringFunction('ST_GeogFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeogFromText');
        $configuration->addCustomStringFunction('ST_GeographyFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeographyFromText');
        $configuration->addCustomStringFunction('ST_GeogFromWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeogFromWKB');
        $configuration->addCustomStringFunction('ST_GeomCollFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomCollFromText');
        $configuration->addCustomStringFunction('ST_GeomFromEWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromEWKB');
        $configuration->addCustomStringFunction('ST_GeomFromEWKT', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromEWKT');
        $configuration->addCustomStringFunction('ST_GeomFromGeoHash', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromGeoHash');
        $configuration->addCustomStringFunction('ST_GeomFromGML', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromGML');
        $configuration->addCustomStringFunction('ST_GeomFromGeoJSON', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromGeoJSON');
        $configuration->addCustomStringFunction('ST_GeomFromKML', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromKML');
        $configuration->addCustomStringFunction('ST_GeomFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromText');
        $configuration->addCustomStringFunction('ST_GeomFromWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeomFromWKB');
        $configuration->addCustomStringFunction('ST_LineFromMultiPoint', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_LineFromMultiPoint');
        $configuration->addCustomStringFunction('ST_LineFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_LineFromText');
        $configuration->addCustomStringFunction('ST_LineFromWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_LineFromWKB');
        $configuration->addCustomStringFunction('ST_LinestringFromWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_LinestringFromWKB');
        $configuration->addCustomStringFunction('ST_MakeBox2D', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MakeBox2D');
        $configuration->addCustomStringFunction('ST_3DMakeBox', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_3DMakeBox');
        $configuration->addCustomStringFunction('ST_MakeBox3D', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MakeBox3D');
        $configuration->addCustomStringFunction('ST_MakeLine', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MakeLine');
        $configuration->addCustomStringFunction('ST_MakeEnvelope', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MakeEnvelope');
        $configuration->addCustomStringFunction('ST_MakePolygon', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MakePolygon');
        $configuration->addCustomStringFunction('ST_MakePoint', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MakePoint');
        $configuration->addCustomStringFunction('ST_MakePointM', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MakePointM');
        $configuration->addCustomStringFunction('ST_MLineFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MLineFromText');
        $configuration->addCustomStringFunction('ST_MPointFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MPointFromText');
        $configuration->addCustomStringFunction('ST_MPolyFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_MPolyFromText');
        $configuration->addCustomStringFunction('ST_Point', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Point');
        $configuration->addCustomStringFunction('ST_PointFromGeoHash', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_PointFromGeoHash');
        $configuration->addCustomStringFunction('ST_PointFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_PointFromText');
        $configuration->addCustomStringFunction('ST_PointFromWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_PointFromWKB');
        $configuration->addCustomStringFunction('ST_Polygon', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Polygon');
        $configuration->addCustomStringFunction('ST_PolygonFromText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_PolygonFromText');
        $configuration->addCustomStringFunction('GeometryType', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\GeometryType');
        $configuration->addCustomStringFunction('ST_Boundary', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Boundary');
        $configuration->addCustomNumericFunction('ST_CoordDim', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_CoordDim');
        $configuration->addCustomNumericFunction('ST_Dimension', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Dimension');
        $configuration->addCustomStringFunction('ST_EndPoint', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_EndPoint');
        $configuration->addCustomStringFunction('ST_Envelope', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Envelope');
        $configuration->addCustomStringFunction('ST_ExteriorRing', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_ExteriorRing');
        $configuration->addCustomStringFunction('ST_GeometryN', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeometryN');
        $configuration->addCustomStringFunction('ST_GeometryType', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeometryType');
        $configuration->addCustomStringFunction('ST_InteriorRingN', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_InteriorRingN');
        $configuration->addCustomStringFunction('ST_IsClosed', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsClosed');
        $configuration->addCustomStringFunction('ST_IsCollection', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsCollection');
        $configuration->addCustomStringFunction('ST_IsEmpty', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsEmpty');
        $configuration->addCustomStringFunction('ST_IsRing', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsRing');
        $configuration->addCustomStringFunction('ST_IsSimple', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsSimple');
        $configuration->addCustomStringFunction('ST_IsValid', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsValid');
        $configuration->addCustomStringFunction('ST_IsValidReason', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsValidReason');
        $configuration->addCustomStringFunction('ST_IsValidDetail', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_IsValidDetail');
        $configuration->addCustomNumericFunction('ST_M', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_M');
        $configuration->addCustomNumericFunction('ST_NDims', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NDims');
        $configuration->addCustomNumericFunction('ST_NPoints', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NPoints');
        $configuration->addCustomNumericFunction('ST_NRings', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NRings');
        $configuration->addCustomNumericFunction('ST_NumGeometries', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NumGeometries');
        $configuration->addCustomNumericFunction('ST_NumInteriorRings', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NumInteriorRings');
        $configuration->addCustomNumericFunction('ST_NumInteriorRing', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NumInteriorRing');
        $configuration->addCustomNumericFunction('ST_NumPatches', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NumPatches');
        $configuration->addCustomNumericFunction('ST_NumPoints', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_NumPoints');
        $configuration->addCustomStringFunction('ST_PatchN', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_PatchN');
        $configuration->addCustomStringFunction('ST_PointN', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_PointN');
        $configuration->addCustomNumericFunction('ST_SRID', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_SRID');
        $configuration->addCustomStringFunction('ST_StartPoint', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_StartPoint');
        $configuration->addCustomStringFunction('ST_Summary', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Summary');
        $configuration->addCustomNumericFunction('ST_X', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_X');
        $configuration->addCustomNumericFunction('ST_XMax', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_XMax');
        $configuration->addCustomNumericFunction('ST_XMin', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_XMin');
        $configuration->addCustomNumericFunction('ST_Y', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Y');
        $configuration->addCustomNumericFunction('ST_YMax', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_YMax');
        $configuration->addCustomNumericFunction('ST_YMin', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_YMin');
        $configuration->addCustomNumericFunction('ST_Z', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Z');
        $configuration->addCustomNumericFunction('ST_ZMax', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_ZMax');
        $configuration->addCustomNumericFunction('ST_Zmflag', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Zmflag');
        $configuration->addCustomNumericFunction('ST_ZMin', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_ZMin');
        $configuration->addCustomStringFunction('ST_AsBinary', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsBinary');
        $configuration->addCustomStringFunction('ST_AsEWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsEWKB');
        $configuration->addCustomStringFunction('ST_AsEWKT', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsEWKT');
        $configuration->addCustomStringFunction('ST_AsGeoJSON', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsGeoJSON');
        $configuration->addCustomStringFunction('ST_AsGML', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsGML');
        $configuration->addCustomStringFunction('ST_AsHEXEWKB', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsHEXEWKB');
        $configuration->addCustomStringFunction('ST_AsKML', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsKML');
        $configuration->addCustomStringFunction('ST_AsSVG', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsSVG');
        $configuration->addCustomStringFunction('ST_GeoHash', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_GeoHash');
        $configuration->addCustomStringFunction('ST_AsLatLonText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsLatLonText');
        $configuration->addCustomStringFunction('ST_AsText', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_AsText');
        $configuration->addCustomStringFunction('ST_Buffer', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Buffer');
        $configuration->addCustomStringFunction('ST_Intersection', 'Jsor\Doctrine\PostGIS\Query\AST\Functions\ST_Intersection');
    }
}
