<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectDetailedResource;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @OA\Get(
     *      path="/api/projects/",
     *      summary="Get Projects list",
     *      tags={"Projects"},
     *      @OA\Response(
     *          response="200",
     *          description="Get all Projects from database",
     *      )
     * ),
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return response()->json(ProjectResource::collection(Project::all()), 200);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @OA\Post(
     *      path="/api/projects/",
     *      summary="Create project",
     *      tags={"Projects"},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/CreateProjectRequest")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Return a new project",
     *      ),
     *      @OA\Response(
     *          response="422",
     *          description="Invalid parameters",
     *      )
     * ),
     *
     * @param  CreateProjectRequest $request
     * @return JsonResponse
     */
    public function store(CreateProjectRequest $request) : JsonResponse
    {
        $newProject = Project::create($request->validated());

        return response()->json([
            'message' => 'Succesfully created',
            $newProject->id => $newProject
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @OA\Get(
     *      path="/api/projects/{id}",
     *      summary="Get project from id",
     *      tags={"Projects"},
     *      @OA\Parameter(
     *          name="id",
     *          description="Project ID",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer", example=1)
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Return a project",
     *      ),
     *      @OA\Response(
     *          response="404",
     *          description="Invalid ID",
     *      )
     * ),
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(int $id) : JsonResponse
    {
        $project = Project::find($id);

        return response()->json(new ProjectResource($project), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @OA\Patch(
     *      path="/api/projects/{id}",
     *      summary="Update project",
     *      tags={"Projects"},
     *      @OA\Parameter(
     *          name="id",
     *          description="Project ID",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer", example=1)
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateProjectRequest")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Return a project",
     *      ),
     *      @OA\Response(
     *          response="404",
     *          description="Invalid ID",
     *      ),
     *      @OA\Response(
     *          response="422",
     *          description="Invalid request body",
     *      )
     * ),
     *
     * @param  UpdateProjectRequest $request
     * @param  Project $project
     * @return JsonResponse
     */
    public function update(UpdateProjectRequest $request, Project $project) : JsonResponse
    {
        $project->update($request->validated());

        return response()->json(new ProjectResource($project), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @OA\Delete(
     *      path="/api/projects/{id}",
     *      summary="Remove a project",
     *      tags={"Projects"},
     *      @OA\Parameter(
     *          name="id",
     *          description="Project ID",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer", example=1)
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Returns a message about successful deletion",
     *          @OA\JsonContent(
     *              example={"message": "Succesfully destroyed"}
     *          ),
     *      ),
     *      @OA\Response(
     *          response="404",
     *          description="Invalid ID",
     *      )
     * ),
     *
     * @param  Vehicle $vehicle
     * @return JsonResponse
     */
    public function destroy(Project $project) : JsonResponse
    {
        $project->delete();

        return response()->json(['message' => 'Succesfully destroyed'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @OA\Get(
     *      path="/api/projects/getAllDetailed",
     *      summary="Get All project information with developers and maintainers",
     *      tags={"Projects"},
     *      @OA\Response(
     *          response="200",
     *          description="Returns a project info",
     *      ),
     * ),
     *
     * @return JsonResponse
     */
    public function getAllProjectDetailed() : JsonResponse
    {
        return response()->json(ProjectDetailedResource::collection(Project::all()), 200);
    }
}
